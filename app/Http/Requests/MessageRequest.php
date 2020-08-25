<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MessageRequest extends FormRequest
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
            'mark' => ['required', Rule::unique('ya_info_message')->ignore($this->message)],
            'content.first' => 'required',
            'content.keyword1' => 'required',
            'content.keyword2' => 'required',
            'content.mark' => 'required',
        ];
    }
}
