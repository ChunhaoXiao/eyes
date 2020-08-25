<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoMessage extends Model
{
    protected $table = "ya_info_message";

    protected $guarded = [];

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';

    public function getContentAttribute($v) {
        return unserialize($v);
    }

    public function setContentAttribute($v) {
        $this->attributes['content'] = serialize($v);
    }
}
