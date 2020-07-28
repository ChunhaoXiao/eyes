<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navdi extends Model
{
    protected $fillable = [
        'title', 'parentid', 'url', 'status', 'orderid', 'picurl', 'picurl02'
    ];
    protected $guarded = [];
    protected $table = 'ya_navdi';
    protected $dateFormat = 'U';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';


    public function scopeIndex($query) {
        return $query->where('status', 1)->oldest('orderid');
    }

    public function setParentidAttribute($v) {
        $this->attributes['parentid'] = intval($v);
    }
}
