<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected $table = 'ya_category';

    public $timestamps = false;

    const TYPES = [
        'consumption' => '消费类型',
        'prod' => '商品类型',
        'disease' => '疾病类型',
        'card' => '卡类型',
        'src' => '客户来源',
    ];

    public function scopeFilter($query, $type) {
        if(in_array($type, ['card1', 'card2']))
        {
            $cardtype = substr($type, -1);
            return $query->where([['type', 'card'], ['cardtype',$cardtype]]);
        }
        return $query->where('type', $type);
    }
    
}
