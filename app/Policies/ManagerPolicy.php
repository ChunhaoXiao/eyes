<?php

namespace App\Policies;

use App\Models\Manager;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManagerPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        return $user->role->id == 1 ;
            
    }
    /**
     * Determine whether the user can view any managers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'manager-index');
    }

    /**
     * Determine whether the user can view the manager.
     *
     * @param  \App\User  $user
     * @param  \App\Manager  $manager
     * @return mixed
     */
    public function view(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'manager-index');
    }

    /**
     * Determine whether the user can create managers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'manager-store');
    }

    /**
     * Determine whether the user can update the manager.
     *
     * @param  \App\User  $user
     * @param  \App\Manager  $manager
     * @return mixed
     */
    public function update(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'manager-update');
    }

    /**
     * Determine whether the user can delete the manager.
     *
     * @param  \App\User  $user
     * @param  \App\Manager  $manager
     * @return mixed
     */
    public function delete(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'manager-delete');
    }

    /**
     * Determine whether the user can restore the manager.
     *
     * @param  \App\User  $user
     * @param  \App\Manager  $manager
     * @return mixed
     */
    public function restore(User $user, Manager $manager)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the manager.
     *
     * @param  \App\User  $user
     * @param  \App\Manager  $manager
     * @return mixed
     */
    public function forceDelete(User $user, Manager $manager)
    {
        //
    }
}
