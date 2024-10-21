<?php

namespace App\Policies;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProfilePolicy
{
  /**
   * Perform pre-authorization checks.
   */
  public function before(User $user): bool|null
  {
    return $user->hasRole('administrator') && $user->hasPermissions('read:manage-users') && $user->hasPermissions('write:manage-users') ? true : null;
  }

  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool
  {
    return $user->hasPermissions('read:manage-users');
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Profile $profile): bool
  {
    return  $user->hasPermissions('read:manage-users') || $user->id == $profile->id;
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool
  {
    return  $user->hasPermissions('write:manage-users');
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Profile $profile): bool
  {
    return $user->hasPermissions('write:manage-users')  || $user->id == $profile->id;
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Profile $profile): bool
  {
    return false;
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Profile $profile): bool
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Profile $profile): bool
  {
    //
  }
}
