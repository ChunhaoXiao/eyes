<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Services\SearchService;
use App\Exports\CustomerExport;
use Exception;
use Box\Spout\Writer\Style\StyleBuilder;

use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Cookie;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Customer::class);
        $datas = $request->all();
        $search = new SearchService($datas);

        if(!empty($datas['excel'])) {

            //return new(CustomerExport())->download();
            //$style = (new StyleBuilder())->setShouldWrapText(true)->build();
            //return (new FastExcel($search->excel()))->headerStyle($style)->download(time().'.xlsx');
        }

        //dump($search->getTotalConsume());
        $perpage = Cookie::get('perpage')??20;
        $users = $search->getCustomerList($perpage);
       
        return view('admin.users.index', [
            'datas' => $users, 
        ]); 
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function usersGenerator() {
        foreach (Customer::orderBy('id')->cursor() as $user) {
            yield ['姓名' => $user->name, '性别' => $user->sex];
        }
       
    }
}
