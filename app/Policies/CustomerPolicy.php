<?php

namespace App\Policies;
use App\Models\Customer;
use App\Models\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
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
     * Determine whether the user can view any customers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'users-index');
    }

    /**
     * Determine whether the user can view the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function view(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'users-index');
    }

    /**
     * Determine whether the user can create customers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'users-store');
    }

    /**
     * Determine whether the user can update the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function update(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'users-update');
    }

    /**
     * Determine whether the user can delete the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function delete(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'users-delete');
    }

    /**
     * Determine whether the user can restore the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function restore(Manager $manager)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the customer.
     *
     * @param  \App\User  $user
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function forceDelete(Manager $manager)
    {
        return true;
    }
}
