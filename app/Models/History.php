<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    const EYE_DISEASE = [
        1 => '近视',
        2 => '远视',
        3 => '散光',
        4 => '弱视',
        5 => '斜视',
    ];

    const EATING = [
        1 => '新鲜菜果',
        2=> '或萝卜',
        3 => '肉、蛋、奶',
        4 => '鱼类',
        5 => '存粮',
        6 => '多食甜食',
        7 => '饮料',
        8 => '油炸食品',
        9 => '零食',
        10 => '是否爱食辣',
    ];

    const SEE_VIEWS = [1 => '5小时以内', 2 => '5-10小时', 3 => '10小时以上'];

    protected $table = 'ya_history';

    protected $guarded = [];

    protected $dates = [

        'add_time', 'create_time', 'update_time'
    ];

    protected $casts = [
        'jws' => 'array',
        'eating_menu' => 'array',
        //'see_view' => 'array',
    ];

    protected $dateFormat = 'U';

    public function customer() {
        return $this->belongsTo(Customer::class, 'user_id');
    }

    // public function setIsPjAttribute($v) {
    //     $this->attributes['is_pj'] = $v??0;
    // }

    public function getShiliAttribute() {
        return implode('、', array_intersect_key(self::EYE_DISEASE,  array_flip($this->jws??[])));
    }

    public function getDietsAttribute() {
        if(!$this->eating_menu) {
            return '';
        }
        return implode('、', array_intersect_key(self::EATING,  array_flip($this->eating_menu??[])));
    }
    
    protected static function booted() {
        static::saving(function($model) {
            foreach(['is_st', 'is_pj','eyeclass_ok'] as $v) {
                if($model->$v === 1) {
                    self::where('user_id', $model->user_id)->update([$v => 0]);
                }
            }
        });
    }

    public function jws_f_eye_disease() {
        //db  
        $arr  = explode('_f_', __FUNCTION__);
        $name = strtoupper($arr[1]);
        $datas = constant('self::'.$name);
    }

    public function getSeeViewTimeAttribute(){
        return self::SEE_VIEWS[$this->see_view]??'';
    }
}
