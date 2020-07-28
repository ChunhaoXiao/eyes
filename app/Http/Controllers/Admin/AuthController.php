<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create() {
        return view('admin.auth.login');
    }

    public function store(Request $request) {
        $credentials = $request->only('username', 'password');
        //$credentials['password'] = md5($credentials['password']);
        //dd($credentials);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin');
        }
        return back();
    }
    
    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
