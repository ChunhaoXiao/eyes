<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'ya_appointment';

    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';

    protected $dates = [
        'apptime'
    ];

    protected $guarded = [];

    protected $dateFormat = 'U';

    public function shop() {
        return $this->belongsTo(Shop::class, 'shopid');
    }

    public function doctorObj() {
        return $this->belongsTo(Doctor::class, 'doctor');
    }

    public function setOrderidAttribute($v) {
        $this->attributes['orderid'] = intval($v);
    }
    
}
