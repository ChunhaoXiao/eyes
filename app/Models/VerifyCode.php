<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerifyCode extends Model
{
    protected $guarded = [];

    public function scopeValid($query, $mobile) {
    	$time = now()->subMinutes(2);
    	return $query->where('mobile', $mobile)->where('updated_at', '>', $time);
    }
}
