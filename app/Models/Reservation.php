<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'ya_reservation';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $dates = ['apptime'];


    protected $dateFormat = 'U';

    public function doctor() {
        return $this->belongsTo(Doctor::class, 'doctorid');
    }

    public function customer() {
        return $this->belongsTo(Customer::class, 'userid');
    }

    public function shop() {
        return $this->belongsTo(Shop::class, 'shopid');
    }
}
