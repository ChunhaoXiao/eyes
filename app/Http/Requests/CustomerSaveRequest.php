<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerSaveRequest extends FormRequest
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
        if($this->isMethod('post') || $this->section == 'baseinfo') {
            return [
                'name' => 'required',
                'phone' => 'required',
                'go_date' => 'required|date',
                'data_src' => 'required',
                'shopid' => 'required',
            ];
        }
        return [];
        // return [
        //     //
        // ];
    }

    public function messages()
    {
        return [
            'name.required' => '客户名字不能为空',
            'phone.required' => '手机号不能为空',
            'go_date.required' => '初诊日期不能为空',
            'data_src.required' => '请选择信息来源',
            'shopid.required' => '请选择分店',
        ];
    }
}
