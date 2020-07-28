<?php

namespace App\Policies;

use App\ShopArea;
use App\Models\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopAreaPolicy
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
     * Determine whether the user can view any shop areas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager)
    {
        return $manager->role->actions->contains('action','areas-index');
    }

    /**
     * Determine whether the user can view the shop area.
     *
     * @param  \App\User  $user
     * @param  \App\ShopArea  $shopArea
     * @return mixed
     */
    public function view(Manager $manager)
    {
        return $manager->role->actions->contains('action','areas-index');
    }

    /**
     * Determine whether the user can create shop areas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'areas-store');
    }

    /**
     * Determine whether the user can update the shop area.
     *
     * @param  \App\User  $user
     * @param  \App\ShopArea  $shopArea
     * @return mixed
     */
    public function update(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'areas-update');
    }

    /**
     * Determine whether the user can delete the shop area.
     *
     * @param  \App\User  $user
     * @param  \App\ShopArea  $shopArea
     * @return mixed
     */
    public function delete(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'areas-delete');
    }

    /**
     * Determine whether the user can restore the shop area.
     *
     * @param  \App\User  $user
     * @param  \App\ShopArea  $shopArea
     * @return mixed
     */
    public function restore(User $user, ShopArea $shopArea)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the shop area.
     *
     * @param  \App\User  $user
     * @param  \App\ShopArea  $shopArea
     * @return mixed
     */
    public function forceDelete(User $user, ShopArea $shopArea)
    {
        //
    }
}
