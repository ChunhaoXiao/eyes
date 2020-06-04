<?php

namespace App\Http\Middleware;

use Closure;

class SetInputData
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
        $fields = [
            'history' => ['jws', 'eating_menu'], 
            'aplastic' => ['zhusu', 'bmzk_r', 'bmzk_l', 'byzk_r', 'byzk_l', 'chuzhi_r', 'chuzhi_l'],
            'handle' => ['right_eye', 'left_eye'],
            'dryeye' => ['disease', 'diet'],
        ];
        $section = $request->section??'baseinfo';
        if(isset($fields[$section])) {
            foreach($fields[$section] as $v) {
                if(!isset($request->$v)) {
                    $request->merge([$v => []]);
                }
            }
        }
        if($section == 'optician') {
            foreach(['qj_ddjcr_jpsfwh', 'qj_ddjcr_jjsfwh'] as $v) {
                if(!isset($request->$v)) {
                    $request->merge([$v => 0]);
                }
            }
        }
        return $next($request);
    }
}
