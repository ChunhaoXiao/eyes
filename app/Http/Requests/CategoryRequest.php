<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            'name' => 'required',
            'cardtype' => Rule::requiredIf($this->type == 'card'),
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名字不能为空',
            'cardtype.required' => '请选择卡类型',
        ];
    }
}
