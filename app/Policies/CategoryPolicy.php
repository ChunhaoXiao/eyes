<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
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
     * Determine whether the user can view any categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager, $type)
    {
        $action = $type.'/category-index';
        return $manager->role->actions->contains('action', $action);
    }

    /**
     * Determine whether the user can view the category.
     *
     * @param  \App\User  $user
     * @param  \App\Category  $category
     * @return mixed
     */
    public function view(Manager $manager, $type)
    {
        $action = $type.'/category-index';
        return $manager->role->actions->contains('action', $action);
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager, $type)
    {
        $action = $type.'/category-store';
        return $manager->role->actions->contains('action', $action);
    }

    /**
     * Determine whether the user can update the category.
     *
     * @param  \App\User  $user
     * @param  \App\Category  $category
     * @return mixed
     */
    public function update(Manager $manager, $type)
    {
        $action = $type.'/category-update';
        return $manager->role->actions->contains('action', $action);
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\User  $user
     * @param  \App\Category  $category
     * @return mixed
     */
    public function delete(Manager $manager, $type)
    {
        $action = $type.'/category-delete';
        return $manager->role->actions->contains('action', $action);
    }

    /**
     * Determine whether the user can restore the category.
     *
     * @param  \App\User  $user
     * @param  \App\Category  $category
     * @return mixed
     */
    public function restore(User $user, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the category.
     *
     * @param  \App\User  $user
     * @param  \App\Category  $category
     * @return mixed
     */
    public function forceDelete(User $user, Category $category)
    {
        //
    }
}
