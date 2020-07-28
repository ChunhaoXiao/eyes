<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ManagerSaveRequest extends FormRequest
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
            'username' => ['required', Rule::unique('ya_manager')->ignore($this->manager)],
            'password' => [empty($this->manager)?'required':'nullable', 'min:6', 'confirmed'],
            'nickname' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户名不能为空',
            'username.unique' => '用户名已存在',
            'password.required' => '密码不能为空',
            'password.min' => '密码最少6位',
            'password.confirmed' => '两次密码不一致',
            'nickname.required' => '昵称不能为空',
        ];
    }
}
