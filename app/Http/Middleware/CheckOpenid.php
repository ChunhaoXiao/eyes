<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckOpenid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dump(Auth::user()); 
        // if(empty($request->user()) && empty($request->code)) {
        //     $redirect = $request->fullUrl();

        //     $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcdfd53042952eec0&redirect_uri=".$redirect."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
        //     return redirect()->away($url);
        // }

        return $next($request);
    }
}
