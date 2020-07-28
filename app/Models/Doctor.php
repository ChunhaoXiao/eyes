<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'ya_infodoctor';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';

    protected $guarded = [
        'picture', 'shopimg'
    ];
    
    public function scopeShop($query, $shopid) {
        if(empty($shopid)) {
            return $query;
        }
        return $query->where('shopid', $shopid);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class, 'doctor');
    }
}
