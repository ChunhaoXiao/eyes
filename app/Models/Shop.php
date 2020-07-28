<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'ya_infoshop';
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';

    public function customers() {
        return $this->hasMany(Customer::class, 'shop');
    }

    protected $fillable = [
        'title',
        'regionid',
        'picurl',
        'picurl1',
        'address',
        'tel',
        'intro',
        'status',
        'indexstatus',
        'orderid',
        'content',
    ];
}
