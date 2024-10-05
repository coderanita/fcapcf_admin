<?php

namespace App\Livewire\Administrator\Projects;

use App\Models\Project;
use App\Models\ProjectTeam;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $totalStep = 5;
    public $currentStep = 1;

    public $selectedPlan = 'Personal';

    public $selectedCustomer;
    public $projectName;
    public $projectDetail;
    public $date;
    public $allowPhone;
    public $allowEmail;

    public $inviteTeam;
    public $teamMembers = [];
    public $searchResults = [];

    public $files = [];

    protected $users = [
        ['id' => 1, 'name' => 'Chris Fox', 'email' => 'test@example.com', 'avatar' => 'img/xs/avatar1.jpg.png'],
        ['id' => 2, 'name' => 'Jane Doe', 'email' => 'test_1@example.com', 'avatar' => 'img/xs/avatar2.jpg.png'],
        ['id' => 3, 'name' => 'John Smith', 'email' => 'test_2@example.com', 'avatar' => 'img/xs/avatar3.jpg.png'],
        // Add more users here
    ];

    public function setCurrentStep($step)
    {
        $this->currentStep = $step;
    }

    public function increaseStep()
    {
        // $this->validateData();

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

    public function removeTeamMember($memberId)
    {
        // Find the member by ID and remove from the array
        $this->teamMembers = array_filter($this->teamMembers, function ($member) use ($memberId) {
            return $member['id'] != $memberId;
        });

        // Reindex the array
        $this->teamMembers = array_values($this->teamMembers);
    }

    public function create()
    {
        $this->dispatch('modalOpened');
    }

    public function save()
    {
        $filePaths = [];

        // Check if files are uploaded
        if ($this->files) {
            foreach ($this->files as $file) {
                // Store the file in the 'projects' folder and get the stored path
                $path = $file->store('projects', 'public');
                $filePaths[] = $path; // Add the file path to the array
            }
        }

        $teamMemberIds = [];
        if ($this->teamMembers) {
            $teamMemberIds = array_map(function ($member) {
                return $member['id'];
            }, $this->teamMembers);
        }

        // Create the project with all fields
        Project::create([
            'plan' => $this->selectedPlan,
            'customer_id' => $this->selectedCustomer,
            'name' => $this->projectName,
            'details' => $this->projectDetail,
            'date' => $this->date,
            'allow_phone' => $this->allowPhone ?? false,
            'allow_email' => $this->allowEmail ?? false,
            'invited_teams' => json_encode($teamMemberIds), // Convert array to JSON if needed
            'files' => json_encode($filePaths), // Convert the file paths array to JSON
        ]);
    }

    public function render()
    {
        return view('_administrator.projects.create');
    }
}
