<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:50',
            'price' => 'required|min:0|numeric',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名称不能为空',
            'name.max' => '商品名称最大50字符',
            'price.required' => '价格不能为空',
            'price.numeric' => '价格必须是数字',
            'description.required' => '请填写商品描述',
        ];
    }
}
