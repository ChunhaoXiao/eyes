<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consume extends Model
{
    protected $table = 'ya_consume';
    protected $guarded = [];
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $dateFormat = 'U';

    protected $dates = [

        'apptime', 'create_time', 'update_time'
    ];
    public function customer () {
        return $this->belongsTo(Customer::class, 'userid');
    }

    public function shop() {
        return $this->belongsTo(Shop::class, 'shopid');
    }   
    
    public function consume_type() {
        return $this->belongsTo(Category::class, 'comsumption_type_id');
    }

    public function product() {
        return $this->belongsTo(Category::class, 'product_type_id');
    }
}
