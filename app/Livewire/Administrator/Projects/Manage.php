<?php

namespace App\Livewire\Administrator\Projects;

use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class Manage extends Component
{


    public $startDate = '2024-01-01';
    public $endDate = '2025-01-01';

    #[On('re-render-update-projects')]
    public function updateUserTable($startDate, $endDate)
    {
        $this->startDate = Carbon::parse($startDate)->startOfDay();
        $this->endDate = Carbon::parse($endDate)->endOfDay();
    }

    #[On('re-render-projects')]
    public function render()
    {
        $this->authorize('viewany', Project::class);

        $projects = Project::with('region', 'country', 'state')
            ->whereBetween('created_at', [$this->startDate, $this->endDate])
            ->get()->map(function ($project) {
                // Decode the invited_teams JSON into an array
                $invitedTeamIds = collect($project->invited_teams)->pluck('id');

                // Fetch users based on the invited team IDs
                $invitedMembers = User::whereIn('id', $invitedTeamIds)->get();

                // Add invited members to the project object
                $project->invited_members = $invitedMembers;

                return $project;
            });


        $statuses = ProjectStatus::get();

        // Count the number of projects for each status
        $statusCounts = $projects->groupBy('project_status_id')->map(function ($projectsInStatus) {
            return $projectsInStatus->count();
        });

        $groupedProjects = $projects->groupBy('project_status_id');

        $totalProjectCost = $projects->sum('project_cost');

        return view('_administrator.projects.manage', [
            'projects' => $projects,
            'statuses' => $statuses,
            'totalProjectCost' => $totalProjectCost,
            'statusCounts' => $statusCounts,
            'groupedProjects' => $groupedProjects
        ]);
    }
}
