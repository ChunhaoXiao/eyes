<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $time = now()->subMinutes(2);
        $where = [
            ['user_id', $this->user()->id],
            ['mobile', $this->phone],
            ['code', $this->code],
            ['updated_at', '>', $time],
        ];
        return [
            'name' => 'required',
            'shopid' => 'required',
            'phone' => 'required|regex:/^1[345789][0-9]{9}$/',
            'code' => ['required', Rule::exists('verify_codes')->where(function($query) use($where){
                $query->where($where);
            })],
        ];
    }

    public function messages() {
        return [
            'name.required' => '名字不能为空',
            'shopid.required' => '请选择店铺',
            'see_phone.required' => '手机号不能为空',
            'see_phone.regex' => '手机号格式不正确',
            'code.required' => '验证码不能为空', 
            'code.exists' =>  '验证码不存在或已失效',
        ];
    }
}
