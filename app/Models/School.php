<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'ya_school';
    protected $guarded = [];

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    
    protected $dateFormat = 'U';

    public function setOrderAttribute($v) {
        $this->attributes['order'] = intval($v);
    }

    public function scopeName($query, $name) {
        if(empty($name))
        {
            return $query;
        }   
        return $query->where('name', 'like', '%'.$name.'%');
    }
 }
