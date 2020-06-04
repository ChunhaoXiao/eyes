<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableModel extends Model
{
    protected $fillable = ['model_name', 'description'];

    public function groups() {
        return $this->hasMany(FieldGroup::class, 'table_id');
    }
}
