<?php
namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Services\CustomerService;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $prefix = $request->route()->getPrefix();
        if($prefix == '/admin' || $request->is('admin/*')) {
            return route('admin.showlogin');
        }
        if(empty($request->code)) {
        	$redirect = $request->fullUrl();
            return 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcdfd53042952eec0&redirect_uri='.$redirect.'&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect';
        }

        //dd('has code'.$request->code);
        CustomerService::saveUser($request->code);
        //return route('index'); 

        return route('index');
        //return 'https://www.google.com';

        // if(3>1) {
        //     //$redirect = "http://eye.zhaoxunta.com";
        // //$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcdfd53042952eec0&redirect_uri=".$redirect."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
        //     //$url="https://www.baidu.com";
        //     //return redirect()->away("https://baidu.com");
        // }
    }
}
