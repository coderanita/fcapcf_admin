<?php

namespace App\Models;

use App\Observers\BeneficiaryObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ObservedBy([BeneficiaryObserver::class])]
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

    public function getAgeAttribute()
    {
        return Carbon::parse($this->date_of_birth)->age;
    }
}
