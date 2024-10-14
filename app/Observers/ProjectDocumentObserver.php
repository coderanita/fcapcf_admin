<?php

namespace App\Observers;

use App\Models\AuditLog;
use App\Models\ProjectDocument;
use Illuminate\Support\Facades\Auth;

class ProjectDocumentObserver
{
    /**
     * Handle the ProjectDocument "created" event.
     */
    public function created(ProjectDocument $projectDocument): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Project Document',
            'description' =>  'Added new Project Document ' . $projectDocument->file_name,
            'action' =>  'New',
        ]);
    }

    /**
     * Handle the ProjectDocument "updated" event.
     */
    public function updated(ProjectDocument $projectDocument): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Project Document',
            'description' =>  'Update Project Document ' . $projectDocument->file_name,
            'action' =>  'Update',
        ]);
    }

    /**
     * Handle the ProjectDocument "deleted" event.
     */
    public function deleted(ProjectDocument $projectDocument): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Project Document',
            'description' =>  'Delete Project Document ' . $projectDocument->file_name,
            'action' =>  'Delete',
        ]);
    }

    /**
     * Handle the ProjectDocument "restored" event.
     */
    public function restored(ProjectDocument $projectDocument): void
    {
        //
    }

    /**
     * Handle the ProjectDocument "force deleted" event.
     */
    public function forceDeleted(ProjectDocument $projectDocument): void
    {
        //
    }
}
