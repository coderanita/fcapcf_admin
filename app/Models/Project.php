<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'invited_teams' => 'json',
        'files' => 'json'
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(ProjectStatus::class);
    }
}
