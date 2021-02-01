<?php

namespace App\Policies;

use App\Models\CaseLaw;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CaseLawPolicy
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
    return in_array($user->role,['admin','superadmin']) && $user->active == true;
  }

  /**
   * Determine whether the user can view the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return mixed
   */
  public function view(User $user, CaseLaw $caseLaw)
  {
    //
  }

  /**
   * Determine whether the user can create models.
   *
   * @param  \App\Models\User  $user
   * @return mixed
   */
  public function create(User $user)
  {
    return in_array($user->role,['admin','superadmin']) && $user->active == true;
  }

  /**
   * Determine whether the user can update the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return mixed
   */
  public function update(User $user, CaseLaw $caseLaw)
  {
    return in_array($user->role,['admin','superadmin']) && $user->active == true;
  }

  /**
   * Determine whether the user can delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return mixed
   */
  public function delete(User $user, CaseLaw $caseLaw)
  {
    return in_array($user->role,['admin','superadmin']) && $user->active == true;
  }

  /**
   * Determine whether the user can restore the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return mixed
   */
  public function restore(User $user, CaseLaw $caseLaw)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \App\Models\CaseLaw  $caseLaw
   * @return mixed
   */
  public function forceDelete(User $user, CaseLaw $caseLaw)
  {
    //
  }
}
