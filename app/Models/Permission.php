<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'code'];
  public $timestamps = false;

  public function roles(): HasMany
  {
    return $this->hasMany(Role::class);
  }
}
