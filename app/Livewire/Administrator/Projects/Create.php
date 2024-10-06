<?php

namespace App\Livewire\Administrator\Projects;

use App\Models\Country;
use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\ProjectTeam;
use App\Models\Region;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $totalStep = 5;
    public $currentStep = 1;
    public $users = [];

    public $title;
    public $sub_title;
    public $details;

    // Step 1
    public $selectedPlan = 'Personal';

    // Step 2
    public $selectedRegion;
    public $selectedCountry;
    public $selectedState;
    public $projectName;
    public $projectDetail;
    public $start_date;
    public $end_date;
    public $projectCost;
    public $projectTarget;
    public $projectStatus;
    public $allowPhone;
    public $allowEmail;

    // Step 3
    public $inviteTeam;
    public $teamMembers = [];

    // Step 4
    public $searchResults = [];

    public $files = [];
    public $uploadedFiles = [];

    public function mount($title = null, $sub_title = null, $details = false)
    {
        // Load all users initially
        $this->users = User::select(
            DB::raw("CONCAT(fname, ' ', lname) AS name"),
            'email',
            'profile_photo_path AS avatar',
            'id'
        )->get()->toArray();

        $this->title = $title ?? '';
        $this->sub_title = $sub_title ?? 'FCAPCF Projects';
        $this->details = $details ?? '';
    }

    protected $messages = [
        'required' => 'This field is required.',
    ];

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'selectedPlan' => 'required',
            ]);
        }

        if ($this->currentStep == 2) {
            $this->validate([
                'selectedRegion' => 'required',
                'selectedCountry' => 'required',
                'selectedState' => 'required',
                'projectName' => 'required',
                'projectDetail' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'projectCost' => 'required',
                'projectTarget' => 'required',
                'projectStatus' => 'required',
            ], [
                'selectedRegion.required' => 'Please select a region.',
                'selectedCountry.required' => 'Please select a country.',
                'selectedState.required' => 'Please select a state.',
            ]);
        }

        if ($this->currentStep == 3) {
        }

        if ($this->currentStep == 4) {
        }
    }

    public function setCurrentStep($step)
    {
        $this->currentStep = $step;
    }

    public function increaseStep()
    {
        $this->validateData();

        $this->currentStep++;
        if ($this->currentStep > $this->totalStep) {
            $this->currentStep = $this->totalStep;
        }
    }

    public function decreaseStep()
    {
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function updatedInviteTeam()
    {
        $this->searchUsers();
    }

    public function searchUsers()
    {
        if (empty($this->inviteTeam)) {
            $this->searchResults = [];
            return;
        }

        $this->searchResults = collect($this->users)
            ->filter(function ($user) {
                return stripos($user['name'], $this->inviteTeam) !== false;
            })
            ->all();
    }

    public function addTeamMember($userId)
    {
        $user = collect($this->users)->firstWhere('id', $userId);
        if ($user && !collect($this->teamMembers)->contains('id', $userId)) {
            $this->teamMembers[] = array_merge($user);
        }
        $this->inviteTeam = ''; // Clear the input after adding
        $this->searchResults = []; // Clear search results
    }

    public function handleTeamAction($action, $memberId)
    {
        if ($action === 'remove') {
            // Remove the member
            $this->teamMembers = array_filter($this->teamMembers, function ($member) use ($memberId) {
                return $member['id'] != $memberId;
            });

            // Reindex the array
            $this->teamMembers = array_values($this->teamMembers);
        } elseif ($action === 'lead') {
            // Logic for making the member a project lead
            // You can add your logic for making the project lead here
            // For example, setting a flag on the member or updating the lead information
        }
    }

    public function updatedFiles()
    {
        foreach ($this->files as $file) {
            $filePath = $file->store('uploads'); // Store file in the 'uploads' directory
            $this->uploadedFiles[] = [
                'name' => $file->getClientOriginalName(),
                'size' => number_format($file->getSize() / 1048576, 2),
                'path' => $filePath,
                'created_at' => NOW(),
            ];
        }
    }

    public function create()
    {
        $this->dispatch('modalOpened');
    }

    public function save()
    {
        // $filePaths = [];

        // // Check if files are uploaded
        // if ($this->files) {
        //     foreach ($this->files as $file) {
        //         // Store the file in the 'projects' folder and get the stored path
        //         $path = $file->store('projects', 'public');
        //         $filePaths[] = $path; // Add the file path to the array
        //     }
        // }

        $teamMemberIds = [];
        if ($this->teamMembers) {
            $teamMemberIds = array_map(function ($member) {
                return $member['id'];
            }, $this->teamMembers);
        }

        // Create the project with all fields
        Project::create([
            'plan' => $this->selectedPlan,
            'region_id' => $this->selectedRegion,
            'country_id' => $this->selectedCountry,
            'state_id' => $this->selectedState,
            'project_name' => $this->projectName,
            'project_details' => $this->projectDetail,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'project_cost' => $this->projectCost,
            'project_target' => $this->projectTarget,
            'project_status_id' => $this->projectStatus,
            'allow_phone' => $this->allowPhone ?? false,
            'allow_email' => $this->allowEmail ?? false,
            'invited_teams' => json_encode($teamMemberIds), // Convert array to JSON if needed
            'files' => json_encode($this->uploadedFiles), // Convert the file paths array to JSON
        ]);

        $this->dispatch('modalClosed');
        $this->dispatch('re-render-projects');

        $this->reset();
    }

    public function render()
    {
        $regions = Region::get();
        $countries = Country::get();
        $states = State::get();

        $statuses = ProjectStatus::get();

        return view(
            '_administrator.projects.create',
            [
                'regions' => $regions,
                'countries' => $countries,
                'states' => $states,
                'statuses' => $statuses
            ]
        );
    }
}
