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
    'role_id',
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

  // public function permissions()
  // {
  //   return $this->through(Role::class)->has(Permission::class);
  // }

  public function hasRole(string $role): bool
  {
    return $this->role->access_level === $role;
  }

  public function fullName()
  {
    return ucwords($this->fname . " " . $this->lname);
  }
}
