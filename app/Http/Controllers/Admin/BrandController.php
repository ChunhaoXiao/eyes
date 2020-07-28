<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function __construct()
    {
        //$this->authorizeResource(Brand::class, ['brand', request()->type]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $this->authorize('viewAny', [Brand::class, $type]);
        $datas = Brand::filter($type)->get();
        return view('admin.brand.index', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        $this->authorize('create', [Brand::class, $type]);
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {
        $this->authorize('create', [Brand::class, $type]);
        $datas = $request->input();
        $datas['type'] = $type;
        Brand::create($datas);
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($type, Brand $brand)
    {
        return view('admin.brand.create', ['data' => $brand]);
        //dump($brand->update());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type, Brand $brand)
    {
        $brand->update($request->input());
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($type, Brand $brand)
    {
        $this->authorize('delete', [Brand::class, $type]);
        $brand->delete();
        return response()->json(['status' => 0]);
    }

}
