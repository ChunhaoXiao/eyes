<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Optician;
use App\Models\History;

class IndexContorller extends Controller
{
    public function index(History $h)
    {
        $h->jws_f_eye_disease();
        // $fiels = [
        //     'jc_sygn_nra',
        //     'jc_sygn_pra',
        //     'jc_sygn_bcc',
        //     'jc_sygn_amp_r',
        //     'jc_sygn_amp_l',
        //     'jc_sygn_amp_c',
        //     'jc_sygn_ac_a',
        //     'jc_sygn_af',
        //     'jc_result',
        // ];
        // Optician::whereNotNull('jc_sygn_nra')->select($fiels)->chunk(10, function($items) {
        //     foreach($items as $v) {
        //         dump($v);
        //     }
        //     return false;
        // });
        //$users = Customer::orderBy('id', 'desc')->take(10)->get();
    
        //return view('admin.index.index');
    }
}
