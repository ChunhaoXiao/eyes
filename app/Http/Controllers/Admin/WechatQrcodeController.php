<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EasyWeChat\Factory;

class WechatQrcodeController extends Controller
{
    public function show() {
        $config = [
            'app_id' => 'wx0e6a03340e56ad42',
            'secret' => 'f74dd0d1a135d6b426f88de7ce4d8081',
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',

            // 'guzzle' => [ 
            //     'verify' => false,
            //     'timeout' => 4.0,
            // ],
            'http' => [
                'max_retries' => 1,
                'retry_delay' => 500,
                'timeout' => 5.0,
                'verify' => false,
                // 'base_uri' => 'https://api.weixin.qq.com/', // 如果你在国外想要覆盖默认的 url 的时候才使用，根据不同的模块配置不同的 uri
            ],
        
        ];
        $app = Factory::officialAccount($config);
        $code = $result = $app->qrcode->forever(56);
        dump($code);
    }
}
