<?php 
namespace App\Services;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerService {
    public function saveUser($openid) {
        Customer::firstOrCreate(['openid' => $openid], ['openid' => $openid]);
    }
}