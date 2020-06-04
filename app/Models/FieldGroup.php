<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldGroup extends Model
{
    protected $guarded = [];

    public function table()
    {
        return $this->belongsTo(TableModel::class, 'table_id');
    }

    public function fields() 
    {
        return $this->hasMany(TableField::class, 'group_id');
    }
}
