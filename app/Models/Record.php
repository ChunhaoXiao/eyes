<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $table = 'ya_record';

    protected $guarded = [];

    protected $dates = [

        'create_time', 
        'update_time', 
        'r_date'
       // 'kx_date_end', 
       // 'kx_date_start',
    ];

    protected $appends = [
        'rd_date'
    ];

    protected $dateFormat = 'U';

    public function getRdDateAttribute() {
        if(!$this->r_date) {
            return '';
        }
        return $this->r_date->toDateString();
    }
}
