<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Customer;
use Auth;
class RegisterController extends Controller
{
    public function create() {
    	return view('home.register.create');
    }

    public function update(RegisterRequest $request) {
    	$datas = $request->except('code');	
    	Auth::user()->update($datas);
    	return response()->json(['message' => 'success']);
    }
}
