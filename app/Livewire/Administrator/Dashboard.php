<?php

namespace App\Livewire\Administrator;

use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $users = [];
    public $projects = [];
    public $totalProjectCost = 0;

    public function mount()
    {
        $this->users = User::take(5)->get();
        $this->projects = Project::take(5)->get();

        $this->totalProjectCost = $this->projects->sum('project_cost');
    }


    public function render()
    {
        return view('_administrator.dashboard');
    }
}
