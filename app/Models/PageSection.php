<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
    	'name',
    	'identity',
    	'pid',
    	'is_display',
    ];

    public function sections() {
    	return $this->hasMany(PageSection::class, 'pid');
    }
}
