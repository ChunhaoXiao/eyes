<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AplasticData extends Model
{
    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';

    protected $table = 'ya_aplastic_data';

    protected $dateFormat = 'U';


    protected $guarded = [];

    protected $dates = [

        'create_time', 'update_time', 'add_date'
    ];

    const ORDERFIELDS = [
        'lens_no' => '标准片编号',
        'curve' => '基弧',
        'color' => '颜色',
        'thick' => '厚度',
        'special' => '特殊要求',
    ];

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id')->withDefault();
    }

    public function customer() {
        return $this->belongsTo(Customer::class, 'user_id');
    }
}
