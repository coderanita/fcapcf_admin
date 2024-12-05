<?php

namespace App\Livewire\Administrator\Reports;

use App\Exports\UsersExport;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class UserReports extends Component
{
    use WithPagination;

    public $sortField = 'created_at'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction

    // Function to handle the sorting
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function export()
    {
        $currentDate = date('mdY');

        return Excel::download(new UsersExport, 'users' . $currentDate . '.xlsx');
    }

    public function render()
    {
        $query = User::query();

        // If sorting by a field in the 'profiles' table, perform a join
        if ($this->sortField == 'personal_marital_status') {
            $users = $query->join('profiles', 'users.id', '=', 'profiles.user_id')
                ->orderBy('profiles.' . $this->sortField, $this->sortDirection)
                ->select('users.*', 'profiles.personal_marital_status')
                ->paginate(10);
        } else {
            $users = $query->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10);
        }

        // Apply sorting by the dynamic field


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
