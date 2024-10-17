<?php

namespace App\Livewire\Administrator\Reports;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserReports extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::paginate(10);
        $totalUsers = User::count();
        $totalAdministrators = User::where('role_id', 1)->count();
        $totalManagers = User::where('role_id', 2)->count();
        $totalStaffs = User::where('role_id', 3)->count();
        $totalVolunteers = User::where('role_id', 4)->count();

        return view(
            '_administrator.reports.user-reports',
            [
                'users' => $users,
                'totalUsers' => $totalUsers,
                'totalAdministrators' => $totalAdministrators,
                'totalManagers' => $totalManagers,
                'totalStaffs' => $totalStaffs,
                'totalVolunteers' => $totalVolunteers,
            ]
        );
    }
}
