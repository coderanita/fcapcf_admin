<?php

namespace App\Models;

use App\Observers\SupportObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([SupportObserver::class])]
class Support extends Model
{
    use HasFactory;

    protected $guarded = [];
}
