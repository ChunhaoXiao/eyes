<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Myopia;
use App\Models\Layzyeye;

class CustomerMyopiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $user)
    {
        if($request->query('table') == 'myopia') {
            $user->myopias()->create($request->except('table'));
        }
        else {
            $user->layzyeyes()->create($request->except('table'));
        }
        
        return response()->json(['status' => 0]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $table = $request->query('table');

        if($table == 'myopia') {
            return Myopia::find($id);
        }
        return Layzyeye::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $table = $request->query('table');
        $model = $table == 'myopia' ? Myopia::find($id): Layzyeye::find($id);
        $model->update($request->except('id', 'table'));
        return response()->json(['status' => 0]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $table = $request->input('table');
        if($table == 'myopia') {
            Myopia::destroy($id);
        } 
        else
        {
            Layzyeye::destroy($id);
        }
        return response()->json(['status' => 0]);
    }

 
}
