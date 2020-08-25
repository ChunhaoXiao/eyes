<?php

namespace App\Models;

use EasyWeChat\MiniProgram\Mall\ProductClient;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "ya_products";
    protected $dateFormat = 'U';
    protected $guarded = ['picture', 'pictures'];
    
    const CREATED_AT = 'create_time';

    const UPDATED_AT = 'update_time';

    protected $attributes = [
        'cover' => ''
    ];

    public function pictures() {
        return $this->hasMany(ProductPicture::class, 'products_id');
    }

    public function updatePictures($pictures) {
        $this->pictures()->delete();
        if(is_array($pictures) && !empty($pictures)) {
            $datas = array_map(function($item){
                return ['path' => $item];
            }, $pictures);
            $this->pictures()->createMany($datas);
        }
    }

}
