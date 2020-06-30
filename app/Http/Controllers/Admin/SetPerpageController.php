<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class SetPerpageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $number = $request->perpage;
        //return response()->queue();
        Cookie::queue('perpage', $number, 60 * 24 * 365);
        return response()->json(['success' => 1]);
    }
}
