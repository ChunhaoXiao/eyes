<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\AplasticData;

class CustomerOrderController extends Controller
{
    public function store(Customer $user, Request $request) {
        $user->aplastic_datas()->create($request->except('id'));
    }

    public function show($id) {
        return AplasticData::find($id);
    }

    public function update(Request $request, $id) {
        $row = AplasticData::find($id);
        $row->update($request->except('id'));
        return response()->json(['status' => 0]);
    }

    public function destroy($id) {
        AplasticData::destroy($id);
        return response()->json(['status' => 0]);
    }
}
