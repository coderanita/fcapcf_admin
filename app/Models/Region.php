<?php

namespace App\Models;

use App\Observers\RegionObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy([RegionObserver::class])]
class Region extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }
}
