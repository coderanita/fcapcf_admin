<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Beneficiary extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function emergencyContacts(): HasMany
    {
        return $this->hasMany(BeneficiaryEmergencyContact::class);
    }
}
