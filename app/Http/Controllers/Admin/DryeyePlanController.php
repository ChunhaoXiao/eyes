<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class DryeyePlanController extends Controller
{
    public function update(Customer $user, Request $request) {
        $ref = $user->dryeye->referral??[];
        $datas = $request->input();
        $datas['created_at'] = date('Y-m-d');
        array_unshift($ref, $datas);
        if($user->dryeye) {
            $user->dryeye->updateOrCreate(['user_id' => $user->id], ['referral' => $ref]);
        }
        
        return response()->json(['status' => 0]);
    }

    public function destroy() {

    }
}
