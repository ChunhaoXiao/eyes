<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\OpticianData;

class CustomerPrescribeController extends Controller
{
    public function store(Customer $user, Request $request) {
        $user->optician_datas()->create($request->except('id'));
        return response()->json(['status' => 0, 'msg' => '添加成功']);
    }

    public function edit($id) {
        return OpticianData::find($id);

    }

    public function update(Request $request, $id) {
        $datas = $request->except('id');
        $row = OpticianData::find($id);
        $row->update($datas);
        return response()->json(['status' => 0, 'msg' => '添加成功']);
    }

    public function destroy($id) {
        OpticianData::destroy($id);
        return response()->json(['status' => 0]);
    }
}
