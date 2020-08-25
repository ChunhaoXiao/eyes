<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CustomerInfoController extends Controller
{
    public function index() {
    	return view('home.customerinfo.index', ['user' => Auth::user()]);
    }
}
