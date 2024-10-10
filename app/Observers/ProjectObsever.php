<?php

namespace App\Observers;

use App\Models\AuditLog;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectObsever
{
    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Project',
            'description' =>  'Added new project ' . $project->project_name,
            'action' =>  'New',
        ]);
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Project',
            'description' =>  'Update project ' . $project->project_name,
            'action' =>  'Update',
        ]);
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Project',
            'description' =>  'Delete project ' . $project->project_name,
            'action' =>  'Delete',
        ]);
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        //
    }
}
