<?php

namespace App\Policies;
use App\Models\Manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class DoctorPolicy
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
     * Determine whether the user can view any doctors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'doctors-index');
    }

    /**
     * Determine whether the user can view the doctor.
     *
     * @param  \App\User  $user
     * @param  \App\Doctor  $doctor
     * @return mixed
     */
    public function view(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'doctors-index');
    }

    /**
     * Determine whether the user can create doctors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'doctors-store');
    }

    /**
     * Determine whether the user can update the doctor.
     *
     * @param  \App\User  $user
     * @param  \App\Doctor  $doctor
     * @return mixed
     */
    public function update(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'doctors-update');
    }

    /**
     * Determine whether the user can delete the doctor.
     *
     * @param  \App\User  $user
     * @param  \App\Doctor  $doctor
     * @return mixed
     */
    public function delete(Manager $manager)
    {
        return $manager->role->actions->contains('action', 'doctors-delete');
    }

    /**
     * Determine whether the user can restore the doctor.
     *
     * @param  \App\User  $user
     * @param  \App\Doctor  $doctor
     * @return mixed
     */
    public function restore(User $user, Doctor $doctor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the doctor.
     *
     * @param  \App\User  $user
     * @param  \App\Doctor  $doctor
     * @return mixed
     */
    public function forceDelete(User $user, Doctor $doctor)
    {
        //
    }
}
