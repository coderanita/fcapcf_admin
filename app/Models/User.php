<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
  use HasApiTokens;
  use HasFactory;
  use HasProfilePhoto;
  use Notifiable;
  use TwoFactorAuthenticatable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'fname',
    'lname',
    'email',
    'password',
    'active',
    'is_approved',
    'role_id',
    'profile_photo_path'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
    'two_factor_recovery_codes',
    'two_factor_secret',
  ];


  /**
   * The accessors to append to the model's array form.
   *
   * @var array<int, string>
   */
  protected $appends = [
    'profile_photo_url',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }
  /**
   * Get the profile associated with the User
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function profile(): HasOne
  {
    return $this->hasOne(Profile::class);
  }


  /**
   * The roles that belong to the User
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function role(): BelongsTo
  {
    return $this->belongsTo(Role::class);
  }
  /**
   * Get all of the permissions for the user.
   */
  public function permissions()
  {
    return $this->role->permissions;
  }
  public function hasPermissions(string $permission)
  {
    return $this->role->permissions()->where('code', $permission)->count();
  }



  public function hasRole(string $role): bool
  {
    return $this->role->access_level === $role;
  }

  public function fullName()
  {
    return ucwords($this->fname . " " . $this->lname);
  }

  public function scopeSortable(Builder $query, $sortField, $sortDirection)
  {
    // Fields that belong to the Profile table
    $profileFields = ['personal_marital_status']; // Add other profile fields here

    // Fields that belong to the User table
    $userFields = ['role_id', 'created_at']; // Add other user fields here (e.g. 'created_at', 'name', etc.)

    if (in_array($sortField, $profileFields)) {
      return $query->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
        ->orderBy('profiles.' . $sortField, $sortDirection);
    } elseif (in_array($sortField, $userFields)) {
      return $query->orderBy($sortField, $sortDirection);
    }

    // Default: Sort by created_at or any field on the users table
    return $query->orderBy($sortField, $sortDirection);
  }
}
