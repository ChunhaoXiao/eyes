<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';
    protected $table = 'ya_brand';

    protected $guarded = [];

    protected $dateFormat = 'U';
    protected $dates = [

        'create_time', 'update_time',
    ];

    public function scopeFilter($query, $type) {
        return $query->where('type', $type);
    }
}
