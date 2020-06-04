<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'ya_authgroup';

    protected $attributes = [
        'rules' => ''
    ];

    protected $guarded = [];

    public $timestamps = false;

    public function actions() {
        return $this->hasMany(RoleAction::class, 'role_id');
    }


    public function attachActions($data) {
        $this->actions()->delete();
        if(!empty($data)) {
            $datas = array_map(function($item) {
                return ['action' => $item];
            }, $data);
            $this->actions()->createMany($datas);
        }
    }
    
}
