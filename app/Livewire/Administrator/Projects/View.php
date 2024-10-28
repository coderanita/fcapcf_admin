<?php

namespace App\Livewire\Administrator\Projects;

use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class View extends Component
{
    public $project;
    public $invitedMembers;

    public function mount(Project $project)
    {
        $this->authorize('view', $project);

        $this->project = $project;

        $invitedTeamIds = collect($project->invited_teams)->pluck('id');

        // Fetch users based on the invited team IDs
        $this->invitedMembers = User::whereIn('id', $invitedTeamIds)->get();
    }

    public function render()
    {
        return view('_administrator.projects.view');
    }
}
