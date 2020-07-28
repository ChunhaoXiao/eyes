<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpticianData extends Model
{
    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';

    protected $table = 'ya_optician_data';

    protected $guarded = [];

    // protected $attributes = [
    //     'dixiang_r' => ''
    // ];

    protected $dates = [

        'create_time', 'update_time',
    ];

    protected $dateFormat = 'U';

    public function jjbrand() {
        return $this->belongsTo(Brand::class, 'jingjia_brand');
    }

    public function jpbrand() {
        return $this->belongsTo(Brand::class, 'jingpian_brand');
    }
}
