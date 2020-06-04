<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsumeRequest extends FormRequest
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
            'apptime' => 'required',
            'price' => 'required|numeric|min:1',
            'shopid' => 'required',
            'comsumption_type_id' => 'required',
            //'product_type_id' => 'required',

        ];
    }
}
