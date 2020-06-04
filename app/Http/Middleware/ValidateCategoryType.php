<?php

namespace App\Http\Middleware;

use Closure;

class ValidateCategoryType
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
        if(!in_array($request->type, ['consumption', 'prod', 'disease', 'card', 'src']))
        {
           return back()->withErrors('invalid type');
        }
        $request->merge(['type' => $request->type]);
        return $next($request);
    }
}
