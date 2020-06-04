<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index() {
       
        return Excel::download(new CustomerExport, 'customers.xlsx');
    }
}
