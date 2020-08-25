<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Handle extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $table = 'ya_handle';

    protected $guarded = [];

    protected $dates = [

        'create_time', 'update_time', 'add_time'
    ];

    protected $dateFormat = 'U';

    protected $casts = [

        'right_eye' => 'array',
        'left_eye' => 'array',
    ];

    public function getEyeRightAttribute() {
        return Category::whereIn('id', $this->right_eye??[])->get()->implode('name', '、');
    }

    public function getEyeLeftAttribute() {
       // dump(Category::whereIn('id', $this->left_eye??[])->get());
        return Category::whereIn('id', $this->left_eye??[])->get()->implode('name', '、');
    }

    // public function setAllTypesAttribute() {
    //     $this->attributes['all_types'] = implode(',', array_unique($this->left_eye + $this->right_eye));
    // }

    public static function boot() {
        parent::boot();
        static::saving(function($model) {
            $model->all_types = implode(',',array_unique(array_merge($model->left_eye??[], $model->right_eye??[])));
        });
    }
}
