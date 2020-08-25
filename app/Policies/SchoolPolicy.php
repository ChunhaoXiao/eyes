<?php

namespace App\Policies;

use App\Models\School;
use App\Models\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPolicy
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
     * Determine whether the user can view any schools.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'school-index');
    }

    /**
     * Determine whether the user can view the school.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function view(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'school-index');
    }

    /**
     * Determine whether the user can create schools.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'school-store');
    }

    /**
     * Determine whether the user can update the school.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function update(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'school-update');
    }

    /**
     * Determine whether the user can delete the school.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function delete(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'school-delete');
    }

    /**
     * Determine whether the user can restore the school.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function restore(User $user, School $school)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the school.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function forceDelete(User $user, School $school)
    {
        //
    }
}
