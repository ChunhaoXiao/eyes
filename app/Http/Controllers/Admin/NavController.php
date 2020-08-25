<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nav;
use App\Models\Navzh;
use App\Models\Navdi;

use Illuminate\Support\Facades\View;

class NavController extends Controller
{
    private $model ;

    public function __construct()
    {
        $models = [
            'nav' => Nav::class,
            'navdi' => Navdi::class,
            'navzh' => Navzh::class,
        ];
        $pos = request()->pos;
        $this->model = $models[$pos];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pos)
    {
    
        $this->authorize("viewAny", [Nav::class, $pos]);
        $datas = $this->model::orderBy('orderid')->get();
        return view('admin.nav.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pos)
    {
        $this->authorize("create", [Nav::class, $pos]);
       // dump(Nav::pluck('title', 'id'));
        return view('admin.nav.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pos)
    {
        $this->authorize("store", [Nav::class, $pos]);
        $this->model::create($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pos, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pos, $id)
    {
        $this->authorize("update", [Nav::class, $pos]);
        $data = $this->model::find($id);
        return view('admin.nav.create', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pos, $id)
    {
        $this->authorize("update", [Nav::class, $pos]);
        $data = $this->model::find($id);
        $data->update($request->input());
        return redirect()->route('nav.index', ['pos' => $request->route()->pos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pos, $id)
    {
        $this->authorize("delete", [Nav::class, $pos]);
        $this->model::destroy($id);
        return response()->json(['status' => 0]);
    }
}
