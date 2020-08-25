<?php

namespace App\Policies;

use App\Models\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class NavPolicy
{
    use HandlesAuthorization;

    public function before(Manager $manager, $pos)
    {
        if($manager->role->id == 1)
        {
            return true;
        }
            
    }

    /**
     * Determine whether the user can view any navs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager, $pos)
    {
        return $manager->role->actions->contains('action', $pos.'/nav-index');
    }

    /**
     * Determine whether the user can view the nav.
     *
     * @param  \App\User  $user
     * @param  \App\Nav  $nav
     * @return mixed
     */
    public function view(Manager $manager, $pos)
    {
        return $manager->role->actions->contains('action', $pos.'/nav-index');
    }

    /**
     * Determine whether the user can create navs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager, $pos)
    {
        return $manager->role->actions->contains('action', $pos.'/nav-store');
    }

    /**
     * Determine whether the user can update the nav.
     *
     * @param  \App\User  $user
     * @param  \App\Nav  $nav
     * @return mixed
     */
    public function update(Manager $manager,  $pos)
    {
        return $manager->role->actions->contains('action', $pos.'/nav-update');
    }

    /**
     * Determine whether the user can delete the nav.
     *
     * @param  \App\User  $user
     * @param  \App\Nav  $nav
     * @return mixed
     */
    public function delete(Manager $manager, $pos)
    {
        return $manager->role->actions->contains('action', $pos.'/nav-delete');
    }

    /**
     * Determine whether the user can restore the nav.
     *
     * @param  \App\User  $user
     * @param  \App\Nav  $nav
     * @return mixed
     */
    public function restore(User $user, Nav $nav)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the nav.
     *
     * @param  \App\User  $user
     * @param  \App\Nav  $nav
     * @return mixed
     */
    public function forceDelete(User $user, Nav $nav)
    {
        //
    }
}
