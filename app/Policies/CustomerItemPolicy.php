<?php

namespace App\Policies;
use App\Models\CustomerItem;
use App\Models\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerItemPolicy
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
     * Determine whether the user can view any customer items.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'customeritem-index');
    }

    /**
     * Determine whether the user can view the customer item.
     *
     * @param  \App\User  $user
     * @param  \App\CustomerItem  $customerItem
     * @return mixed
     */
    public function view(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'customeritem-index');
    }

    /**
     * Determine whether the user can create customer items.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'customeritem-store');
    }

    /**
     * Determine whether the user can update the customer item.
     *
     * @param  \App\User  $user
     * @param  \App\CustomerItem  $customerItem
     * @return mixed
     */
    public function update(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'customeritem-update');
    }

    /**
     * Determine whether the user can delete the customer item.
     *
     * @param  \App\User  $user
     * @param  \App\CustomerItem  $customerItem
     * @return mixed
     */
    public function delete(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'customeritem-delete');
    }

   
}
