<?php

namespace App\Observers;

use App\Models\AuditLog;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class AnnouncementObserver
{
    /**
     * Handle the Announcement "created" event.
     */
    public function created(Announcement $announcement): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Announcement',
            'description' =>  'Added new announcement ' . $announcement->title,
            'action' =>  'New',
        ]);
    }

    /**
     * Handle the Announcement "updated" event.
     */
    public function updated(Announcement $announcement): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Announcement',
            'description' =>  'Update announcement ' . $announcement->title,
            'action' =>  'Update',
        ]);
    }

    /**
     * Handle the Announcement "deleted" event.
     */
    public function deleted(Announcement $announcement): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Announcement',
            'description' =>  'Delete announcement ' . $announcement->title,
            'action' =>  'Delete',
        ]);
    }

    /**
     * Handle the Announcement "restored" event.
     */
    public function restored(Announcement $announcement): void
    {
        //
    }

    /**
     * Handle the Announcement "force deleted" event.
     */
    public function forceDeleted(Announcement $announcement): void
    {
        //
    }
}
