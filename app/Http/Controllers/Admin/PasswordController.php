<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PaswordRequest;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function edit() {
        return view('admin.password.edit');
    }

    public function update(PaswordRequest $request) {
        Auth::user()->update(['password' => $request->password]);
        Auth::logout();
        return redirect()->route('password.edit');
    }
}
