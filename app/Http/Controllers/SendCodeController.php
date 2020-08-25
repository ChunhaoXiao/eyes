<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\VerifyCode;
use Nice\XhySms\XhySms;

class SendCodeController extends Controller
{
    public function create() {
        return view('home.register.create');
    }

    public function store(Request $request, XhySms $Sms) {
    	$mobile = $request->phone;
        $row = Auth::user()->code()->valid($mobile)->first();
        if($row) {
            $seconds= $row->updated_at->addMinutes(2)->diffInSeconds(now());
            return response()->json(['message' => '验证码发送太频繁，请过'.$seconds.'秒后再试'], 422);
        }
    	$code = random_int(1000, 9999);
        Auth::user()->code()->create([
            'mobile' => $mobile,
            'code' => $code,
        ]);

        $Sms->send($mobile, [
            'template' => 'SMS_198931474', 
            'data' => [
              'code' => $code
            ]
        ],'aliyun');

    	return response()->json(['message' => 'success']);
    }
}
