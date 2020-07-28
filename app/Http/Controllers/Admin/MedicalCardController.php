<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Events\CardNumUpdated;
use App\Http\Requests\CardRequest;
use QrCode;

class MedicalCardController extends Controller
{
    public function index(Customer $user) {
        //dump($customer);
        $datas = $user->cardinfo()->with('shop')->latest()->paginate();
        return view('admin.medicalcard.create', ['datas' => $datas, 'customer' => $user]);
    }

    public function create(Customer $user) {
        return view('admin.medicalcard.create')->with('user', $user);
    }

    public function store(CardRequest $request, Customer $user) {
        $origin_num = $user->card->num??0;
        $card = $user->card()->updateOrCreate(['customerid' => $user->id], ['num' => $request->num]);
        $card->origin_num = $origin_num;
        event(new CardNumUpdated($card));
        return back()->with('success', 1);
    }

    public function edit() {

    }

    public function show(Customer $user) {
        //dd(request()->root());
       // QrCode::generate('Make me into a QrCode!');
        return view('admin.medicalcard.create')->with('user', $user);
    }
}
