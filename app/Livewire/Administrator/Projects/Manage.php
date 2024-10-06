<?php

namespace App\Livewire\Administrator\Projects;

use App\Models\Project;
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

        info($projects);
        
        return view('_administrator.projects.manage', ['projects' => $projects]);
    }
}
