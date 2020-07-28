<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
        return [
            'title' => 'required',
            'shopid' => 'required',
            'doctor' => 'required',
            'apptime' => 'required|date'
        ];
    }

    public function messages()
    {
        return [

            'title.required' => '标题不能为空',
            'shopid.required' => '请选择店铺',
            'doctor.required' => '请选择医生',
            'apptime.required' => '请选择预约时间',
        ];
    }
}
