<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Customer;

class SaveUserOpenid
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
        if(empty($request->user()) && $request->code)
        {
            Customer::loginUser($request->code);
        }
        return $next($request);
    }
}
