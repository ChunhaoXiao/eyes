<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopArea extends Model
{
    protected $table = 'ya_region';
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';
    protected $guarded = [];
}
