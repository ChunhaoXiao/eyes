<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerItem extends Model
{
    protected $guarded = [];

    public function items() {
        return $this->hasMany(CustomerItem::class, 'pid');
    }
}
