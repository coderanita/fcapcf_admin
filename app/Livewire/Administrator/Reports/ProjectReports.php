<?php

namespace App\Livewire\Administrator\Reports;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectReports extends Component
{
    use WithPagination;

    public function render()
    {
        $projects = Project::paginate(10);
        // Fetch total projects
        $totalProjects = Project::count();

        // Assuming 'completed' projects have a specific project_status_id, e.g., 'completed'
        $completedProjects = Project::where('project_status_id', '4')->count();

        // Total incomplete projects assuming incomplete status is 'incomplete'
        $incompleteProjects = $totalProjects - $completedProjects;

        // Total project cost (sum of project costs)
        $totalProjectCost = Project::sum('project_cost');

        // Total unique regions
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
