<?php

namespace App\Livewire\Dashboard;

use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\User;
use Livewire\Component;

class ProjectStat extends Component
{
    public function render()
    {
        $projects = Project::with('region', 'country', 'state')->get()->map(function ($project) {
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

        return view(
            'dashboard.project-stat',
            [
                'projects' => $projects,
                'statuses' => $statuses,
                'totalProjectCost' => $totalProjectCost,
                'statusCounts' => $statusCounts,
                'groupedProjects' => $groupedProjects
            ]
        );
    }
}
