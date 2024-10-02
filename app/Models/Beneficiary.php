<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Beneficiary extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function emergencyContact(): HasOne
    {
        return $this->hasOne(BeneficiaryEmergencyContact::class);
    }

    public function assistance(): HasOne
    {
        return $this->hasOne(BeneficiaryAssistance::class);
    }

    public function socialEconomic(): HasOne
    {
        return $this->hasOne(BeneficiarySocialEconomic::class);
    }
}
