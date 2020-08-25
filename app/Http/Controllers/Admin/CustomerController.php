<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\CustomerSaveRequest;

class CustomerController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Customer::class);
    }

    public function create() {
        return view('admin.customer.create');
    }

    public function show(Customer $customer, $section = 'baseinfo')
    {
        $section = in_array($section, array_keys(Customer::NAV))? $section : 'baseinfo';
        return view('admin.customer.show.'.$section, ['user' => $customer, 'section' => $section]);
    }

    //创建用户
    public function store(CustomerSaveRequest $request) {
        $customer = Customer::create($request->all());
        return response()->json(['status' => 0, 'url' => route('admin.customer.index', [
            'customer' => $customer->id, 
            'section' => 'baseinfo'])
        ]);
    }

    public function edit(Request $request, Customer $customer, $section) {
        
        //dd($customer->aplastic);
        return view('admin.customer.edit.'.$section, ['user' => $customer, 'section' => $section]);
    }

    public function update(CustomerSaveRequest $request, Customer $customer, $section) {
        if($section == 'baseinfo') {
            $customer->update($request->all());
            //return response()->json(['status' => 0, 'url' => route('admin.customer.index')]);
        }
        else {
            $customer->$section()->updateOrCreate(['user_id' => $customer->id], $request->all());
        }
       
        return response()->json(['status' => 0, 'url' => route('admin.customer.index', [
            'customer' => $customer->id,
            'section' => $section,
            ])
        ]);
    }
}
