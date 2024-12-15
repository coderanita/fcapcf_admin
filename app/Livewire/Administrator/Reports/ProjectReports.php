<?php

namespace App\Livewire\Administrator\Reports;

use App\Exports\ProjectsExport;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ProjectReports extends Component
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

    public function getLeadName($teamMembers)
    {
        $lead = collect($teamMembers)->firstWhere('is_lead', true);

        if ($lead) {
            $user = User::find($lead['id']);
            return $user ? $user->fname . ' ' . $user->lname : null;
        }

        return null;
    }

    public function export()
    {
        $currentDate = date('mdY');

        return Excel::download(new ProjectsExport, 'projects' . $currentDate . '.xlsx');
    }


    public function render()
    {
        $projects = Project::orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        foreach ($projects as $project) {
            $project->lead_name = $this->getLeadName($project->invited_teams);
        }

        // Fetch total projects
        $totalProjects = Project::count();
        $completedProjects = Project::where('project_status_id', '4')->count();
        $incompleteProjects = $totalProjects - $completedProjects;
        $totalProjectCost = Project::sum('project_cost');

        $totalCountries = Project::distinct('country_id')->count('country_id');

        return view('_administrator.reports.project-reports', [
            'projects' => $projects,
            'totalProjects' => $totalProjects,
            'completedProjects' => $completedProjects,
            'incompleteProjects' => $incompleteProjects,
            'totalProjectCost' => $totalProjectCost,

            'totalCountries' => $totalCountries,
        ]);
    }
}
