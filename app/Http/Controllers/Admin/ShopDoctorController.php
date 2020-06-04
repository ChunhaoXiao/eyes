<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class ShopDoctorController extends Controller
{
    public function index($shop = 0) {
        return Doctor::shop($shop)->get();
    }
}
