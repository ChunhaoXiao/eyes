<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
    protected $guarded = ['password_confirmation'];
    protected $table = 'ya_manager';
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';

    const AVATARS = [
        'user1.jpg', 'user2.jpg', 'user3.jpg', 'user4.jpg', 'user5.jpg', 'user6.jpg', 'user7.jpg', 'user8.jpg'
    ];
    
    public function setPasswordAttribute($v) {
        $this->attributes['password'] = bcrypt($v);
    }

    public function scopeSearch($query, $data) {
        $searchField = ['username', 'nickname', 'mobile', 'shop', 'group_id'];
        if(!is_array($data) || empty($data)) {
            return $query;
        }
        foreach($data as $k => $v) {
            if(in_array($k, $searchField) && strlen($v) > 0) {
                $query = $query->where($k, $v);
            }
        }
        return $query->where('is_founder', 0);
    }

    public function role() {
        return $this->belongsTo(Role::class, 'group_id');
    }
    
    public function getFakePhoneAttribute() {
        return substr($this->mobile,0, 6).'***';
    }

    // public function actions() {
    //     return $this->hasManyThrough(RoleAction::class, )
    // }
}
