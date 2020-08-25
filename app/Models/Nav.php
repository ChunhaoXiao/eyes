<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    protected $guarded = [];
    protected $table = 'ya_nav';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';


    public function scopeTop($query) {
        return $query->where([['parentid', 0], ['status', 1]]);
    }

    public function setParentidAttribute($v) {
        $this->attributes['parentid'] = intval($v);
    }
}
