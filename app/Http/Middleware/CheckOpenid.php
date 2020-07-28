<?php

namespace App\Http\Middleware;

use Closure;

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
        if(empty($request->user()) && empty($request->code)) {
            $path = $request->path();
            return redirect($path.'?code='.time());
        }
        return $next($request);
    }
}
