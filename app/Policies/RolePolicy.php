<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
  /**
   * Perform pre-authorization checks.
   */
  public function before(User $user): bool
  {
    return  $user->hasRole('administrator') && $user->hasPermissions('read:manage-users') && $user->hasPermissions('write:manage-users')  ? true : false;
  }
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool
  {
    //
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Role $role): bool
  {
    //
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool
  {
    //
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Role $role): bool
  {
    //
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Role $role): bool
  {
    //
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Role $role): bool
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Role $role): bool
  {
    //
  }
}
