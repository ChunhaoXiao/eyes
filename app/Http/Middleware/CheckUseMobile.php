<?php

namespace App\Http\Middleware;

use Closure;

class CheckUseMobile
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
    	if(!$request->user()->phone) {
    		return redirect()->route("register");
    	}
        return $next($request);
    }
}
