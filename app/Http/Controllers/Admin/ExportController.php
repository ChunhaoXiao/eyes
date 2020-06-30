<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index(Request $request) {

        return (new CustomerExport($request->all()))->download('aaaa.xlsx');
       
        //dump($request->all());


        //return redirect()->route('admin.success')->with('offset', 1);
        //return view();
        //return Excel::download(new CustomerExport, 'customers.xlsx');
    }
}
