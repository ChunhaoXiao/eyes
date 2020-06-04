<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerOrderController extends Controller
{
    public function store(Customer $user, Request $request) {
        $user->aplastic_datas()->create($request->all());
    }
}
