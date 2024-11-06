<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    public static function getCountryCode($countryId)
    {
        return self::find($countryId)->code ?? 'Unknown';
    }
}
