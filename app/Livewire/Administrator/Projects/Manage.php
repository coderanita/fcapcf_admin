<?php

namespace App\Livewire\Administrator\Projects;

use App\Models\Project;
use Livewire\Component;

class Manage extends Component
{
    public function render()
    {
        $projects = Project::get();
        return view('_administrator.projects.manage', ['projects' => $projects]);
    }
}
