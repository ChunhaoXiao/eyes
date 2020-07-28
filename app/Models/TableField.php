<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableField extends Model
{
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(FieldGroup::class, 'group_id');
    }
}
