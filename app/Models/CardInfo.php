<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardInfo extends Model
{
    protected $table = "ya_cardinfo";

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';

    protected $guarded = [];
    
    public function shop() {
        return $this->belongsTo(Shop::class, 'shopid');
    }

    public function getChangeTypeAttribute() {
        return $this->flag == 1 ? '-'.$this->num : '+'.$this->num;
    }

}
