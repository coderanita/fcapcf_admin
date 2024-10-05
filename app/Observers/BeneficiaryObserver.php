<?php

namespace App\Observers;

use App\Models\AuditLog;
use App\Models\Beneficiary;
use Illuminate\Support\Facades\Auth;

class BeneficiaryObserver
{
    /**
     * Handle the Beneficiary "created" event.
     */
    public function created(Beneficiary $beneficiary): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Beneficiary',
            'description' =>  'Added new beneficiary ' . $beneficiary->first_name . ' ' . $beneficiary->last_name,
            'action' =>  'New',
        ]);
    }

    /**
     * Handle the Beneficiary "updated" event.
     */
    public function updated(Beneficiary $beneficiary): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Beneficiary',
            'description' =>  'Update beneficiary details of ' . $beneficiary->first_name . ' ' . $beneficiary->last_name,
            'action' =>  'Update',
        ]);
    }

    /**
     * Handle the Beneficiary "deleted" event.
     */
    public function deleted(Beneficiary $beneficiary): void
    {
        AuditLog::create([
            'user_id' =>  Auth::user()->id,
            'module' =>  'Beneficiary',
            'description' =>  'Delete beneficiary ' . $beneficiary->first_name . ' ' . $beneficiary->last_name,
            'action' =>  'Delete',
        ]);
    
    }

    /**
     * Handle the Beneficiary "restored" event.
     */
    public function restored(Beneficiary $beneficiary): void
    {
        //
    }

    /**
     * Handle the Beneficiary "force deleted" event.
     */
    public function forceDeleted(Beneficiary $beneficiary): void
    {
        //
    }
}
