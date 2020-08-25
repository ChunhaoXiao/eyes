<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navzh extends Model
{
    protected $fillable = [
        'title', 'parentid', 'url', 'status', 'orderid', 'picurl', 'picurl02',
    ];
    protected $table = 'ya_navzh';
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';


    public function setParentidAttribute($v) {
        $this->attributes['parentid'] = intval($v);
    }
}
