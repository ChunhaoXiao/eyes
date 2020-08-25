<?php 
namespace App\Services;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CustomerService {
    public static function saveUser($code) {
        //dd($code);
        $userinfo = self::getOpenId($code);
       // dd($openid);
        if($userinfo)
        {
            $customer = Customer::updateOrCreate(['openid' => $userinfo['openid']], ['headimgurl' => $userinfo['headimgurl']]);
            Auth::login($customer);
            return $customer;
        }
    }


    public static function getOpenId($code) {
    	$appid = 'wxcdfd53042952eec0';
    	$app_secret = 'aa1288302f8e2135e4521824454f266b';

    	$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$app_secret."&code=".$code."&grant_type=authorization_code";
    	$response = Http::get($url);
        $body = json_decode($response->getBody(), true);
       
        $api = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$body['access_token'].'&openid='.$body['openid'].'&lang=zh_CN';
        $res = Http::get($api);
        $datas = array_merge($body, json_decode($res->getBody(), true));
        file_put_contents('wechatdata.txt', json_encode($datas));
        return $datas;
    	//return $body['openid']??''; 
    }
}