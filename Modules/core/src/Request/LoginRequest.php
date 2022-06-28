<?php

namespace TM\Core\Request;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cell_number' => 'required|string|regex:/^9[0,1,2,3,9]{1}[0-9]{8}$/',
            'password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'cell_number.required'=>trans('core::message.cell_phone'),
            'cell_number.regex' =>trans('core::message.regex')
        ];
    }
}
