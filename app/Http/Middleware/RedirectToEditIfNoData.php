<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToEditIfNoData
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
        $section = $request->section??'baseinfo';
        
        $customer = $request->customer;
        if(empty($customer)) {
            return redirect()->route('admin.customer.create');
        }
        $except = ['myopias', 'layzyeyes', 'records', 'comments'];
        if($section != 'baseinfo' && !$customer->$section && !in_array($section, $except)) {
            return redirect()->route('admin.customer.edit', ['customer' => $customer, 'section' => $section]);
        }
        return $next($request);
    }
}
