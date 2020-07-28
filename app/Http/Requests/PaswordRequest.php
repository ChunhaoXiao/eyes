<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaswordRequest extends FormRequest
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
            'oldpassword' => 'password:admin',
            'password' => 'required|min:6|max:16|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'oldpassword.password' => '原密码不正确',
            'password.required' => '密码不能为空',
            'password.min' => '密码最少6为',
            'password.confirmed' => '两次密码不一致',
        ];
    }
}
