<?php

namespace App\Policies;

use App\Models\Brand;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Manager;

class BrandPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewAny(Manager $manager, $type) {
        return $this->cando($manager, $type, 'index');
    }

    public function create(Manager $manager, $type) {
      
        return $this->cando($manager, $type, 'store');
    }

    public function delete(Manager $manager, $type) {
        return $this->cando($manager, $type, 'delete');
    }

    private function cando($manager, $type, $action) {
        $action = 'brand-'.$type.'-'.$action;
        return $manager->role->actions->contains('action', $action);
    }
}
