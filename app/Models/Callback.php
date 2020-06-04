<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    protected $guarded = [];
    protected $table = 'ya_callback';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $dates = [
        'create_time', 'update_time'
    ];
    protected $dateFormat = 'U';

}