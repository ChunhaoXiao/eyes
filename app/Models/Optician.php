<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Optician extends Model
{
    protected $table = "ya_optician";

    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';

    protected $guarded = [];

    protected $dateFormat = 'U';

    public function user() {
        return $this->belongsTo(Customer::class, 'user_id');
    }
}
