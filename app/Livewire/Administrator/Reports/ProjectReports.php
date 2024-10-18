<?php

namespace App\Livewire\Administrator\Reports;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

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

    public function render()
    {
        $projects = Project::orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        // Fetch total projects
        $totalProjects = Project::count();
        $completedProjects = Project::where('project_status_id', '4')->count();
        $incompleteProjects = $totalProjects - $completedProjects;
        $totalProjectCost = Project::sum('project_cost');
        $totalRegions = Project::distinct('region_id')->count('region_id');

        return view('_administrator.reports.project-reports', [
            'projects' => $projects,
            'totalProjects' => $totalProjects,
            'completedProjects' => $completedProjects,
            'incompleteProjects' => $incompleteProjects,
            'totalProjectCost' => $totalProjectCost,
            'totalRegions' => $totalRegions,
        ]);
    }
}
