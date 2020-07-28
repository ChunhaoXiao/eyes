<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerPrescribeController extends Controller
{
    public function store(Customer $user, Request $request) {
        $user->optician_datas()->create($request->input());
        return response()->json(['status' => 0, 'msg' => '添加成功']);
    }
}
