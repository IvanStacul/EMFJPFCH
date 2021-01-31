<?php

namespace App\Policies;

use App\Models\Authority;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AuthorityPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any models.
   *
   * @param  \App\Models\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return $user->role == 'superadmin' && $user->active == true;
  }

  /**
   * Determine whether the user can view the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\Authority  $authority
   * @return mixed
   */
  public function view(User $user, Authority $authority)
  {
    return $user->role == 'superadmin' && $user->active == true;
  }

  /**
   * Determine whether the user can create models.
   *
   * @param  \App\Models\User  $user
   * @return mixed
   */
  public function create(User $user)
  {
    return $user->role == 'superadmin' && $user->active == true;
  }

  /**
   * Determine whether the user can update the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\Authority  $authority
   * @return mixed
   */
  public function update(User $user, Authority $authority)
  {
    return $user->role == 'superadmin' && $user->active == true;
  }

  /**
   * Determine whether the user can delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\Authority  $authority
   * @return mixed
   */
  public function delete(User $user, Authority $authority)
  {
    return $user->role == 'superadmin' && $user->active == true;
  }

  /**
   * Determine whether the user can restore the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\Authority  $authority
   * @return mixed
   */
  public function restore(User $user, Authority $authority)
  {
    return $user->role == 'superadmin' && $user->active == true;
  }

  /**
   * Determine whether the user can permanently delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\Authority  $authority
   * @return mixed
   */
  public function forceDelete(User $user, Authority $authority)
  {
    return $user->role == 'superadmin' && $user->active == true;
  }
}
