<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShopAreaRequest extends FormRequest
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
            'title' => ['required', 'max:50', Rule::unique('ya_region')->ignore($this->area)],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '区域名称不能为空',
            'title.max' => '区域名称最多50字符',
            'title.unique' => '区域名称已存在',
        ];
    }
}
