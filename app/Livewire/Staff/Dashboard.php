<?php

namespace App\Livewire\Staff;

use App\Models\Beneficiary;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $users = [];
    public $projects = [];
    public $beneficiaries = [];
    public $totalProjectCost = 0;

    public function mount()
    {
        $this->users = User::take(5)->get();
        $this->projects = Project::take(5)->get();

        $this->totalProjectCost = Project::sum('project_cost');

        $this->beneficiaries = Beneficiary::take(5)->orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('_staff.dashboard');
    }
}
