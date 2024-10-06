<?php

namespace App\Livewire\Administrator\Projects;

use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Manage extends Component
{
    #[On('re-render-projects')]
    public function render()
    {
        $projects = Project::with('region', 'country', 'state')->get()->map(function ($project) {
            // Decode the invited_teams JSON into an array
            $invitedTeamIds = json_decode($project->invited_teams, true);

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
