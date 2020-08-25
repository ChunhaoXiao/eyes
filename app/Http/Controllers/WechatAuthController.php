<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WechatAuthController extends Controller
{
    public function index() {
    	//$redirect = route('index');
    	$redirect = "http://eye.zhaoxunta.com";

        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcdfd53042952eec0&redirect_uri='.$redirect.'&response_type=code&scope=snsapi_base&state=123#wechat_redirect';
        return redirect()->away($url);
    }
}
