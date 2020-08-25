<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Brand;
use App\Models\Category;
use App\Policies\BrandPolicy;
use App\Models\School;
use App\Policies\CategoryPolicy;
use App\Policies\SchoolPolicy;
use App\Models\Manager;
use App\Policies\ManagerPolicy;
use App\Models\Role;
use App\Policies\RolePolicy;
use App\Models\ShopArea;
use App\Policies\ShopAreaPolicy;
use App\Policies\ShopPolicy;
use App\Models\Shop;
use App\Policies\CustomerPolicy;
use App\Models\Customer;
use App\Models\Appointment;
use App\Policies\AppointmentPolicy;
use App\Policies\ReservationPolicy;
use App\Models\Reservation;
use App\Policies\DoctorPolicy;
use App\Models\Doctor;
use App\Policies\CustomerItemPolicy;
use App\Models\CustomerItem;
use App\Policies\NavPolicy;
use App\Models\Nav;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Brand::class => BrandPolicy::class,
        School::class => SchoolPolicy::class,
        Category::class => CategoryPolicy::class,
        Manager::class => ManagerPolicy::class,
        Role::class => RolePolicy::class,
        ShopArea::class => ShopAreaPolicy::class,
        Shop::class => ShopPolicy::class,
        Customer::class => CustomerPolicy::class,
        Appointment::class => AppointmentPolicy::class,
        Reservation::class => ReservationPolicy::class,
        Doctor::class => DoctorPolicy::class,
        CustomerItem::class => CustomerItemPolicy::class,
        Nav::class => NavPolicy::class,
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        
    }

   
}
