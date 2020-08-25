<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopArea;
use App\Models\Doctor;

class ExpertController extends Controller
{
    public function index(Request $request) {
    	$area = $request->area? ShopArea::find($request->area) : ShopArea::orderBy('orderid')->first();
    	$doctors = $area->doctors()->get();
    	return view('home.expert.index', ['datas' => $doctors, 'area' => $area]);
    }

    public function show(Doctor $doctor) {
    	return view('home.expert.show', ['data' => $doctor]);
    }
}
