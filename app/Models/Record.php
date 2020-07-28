<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $table = 'ya_record';

    protected $guarded = [];

    protected $dates = [

        'create_time', 
        'update_time', 
       // 'kx_date_end', 
       // 'kx_date_start',
    ];

    protected $dateFormat = 'U';
}
