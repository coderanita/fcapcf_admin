<?php

namespace App\Observers;

use App\Models\AuditLog;
use App\Models\Region;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class RegionObserver
{
    /**
     * Handle the Region "created" event.
     */
    public function created(Region $region): void
    {
        AuditLog::create([
            'user_id' =>  FacadesAuth::user()->id,
            'module' =>  'Region',
            'description' =>  'Added new region ' . $region->name,
            'action' =>  'New',
        ]);
    }

    /**
     * Handle the Region "updated" event.
     */
    public function updated(Region $region): void
    {
        AuditLog::create([
            'user_id' =>  FacadesAuth::user()->id,
            'module' =>  'Region',
            'description' =>  'Update region ' . $region->name,
            'action' =>  'Update',
        ]);
    }

    /**
     * Handle the Region "deleted" event.
     */
    public function deleted(Region $region): void
    {
        AuditLog::create([
            'user_id' =>  FacadesAuth::user()->id,
            'module' =>  'Region',
            'description' =>  'Delete region ' . $region->name,
            'action' =>  'Delete',
        ]);
    }

    /**
     * Handle the Region "restored" event.
     */
    public function restored(Region $region): void
    {
        //
    }

    /**
     * Handle the Region "force deleted" event.
     */
    public function forceDeleted(Region $region): void
    {
        //
    }
}
