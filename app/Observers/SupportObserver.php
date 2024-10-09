<?php

namespace App\Observers;

use App\Models\AuditLog;
use App\Models\Support;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class SupportObserver
{
    /**
     * Handle the Support "created" event.
     */
    public function created(Support $support): void
    {
        AuditLog::create([
            'user_id' =>  FacadesAuth::user()->id,
            'module' =>  'Project',
            'description' =>  'Added new support ' . $support->subject,
            'action' =>  'New',
        ]);
    }

    /**
     * Handle the Support "updated" event.
     */
    public function updated(Support $support): void
    {
        AuditLog::create([
            'user_id' =>  FacadesAuth::user()->id,
            'module' =>  'Project',
            'description' =>  'Update support ' . $support->subject,
            'action' =>  'Update',
        ]);
    }

    /**
     * Handle the Support "deleted" event.
     */
    public function deleted(Support $support): void
    {
        AuditLog::create([
            'user_id' =>  FacadesAuth::user()->id,
            'module' =>  'Project',
            'description' =>  'Delete support ' . $support->subject,
            'action' =>  'Delete',
        ]);
    }

    /**
     * Handle the Support "restored" event.
     */
    public function restored(Support $support): void
    {
        //
    }

    /**
     * Handle the Support "force deleted" event.
     */
    public function forceDeleted(Support $support): void
    {
        //
    }
}
