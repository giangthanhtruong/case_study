<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'User email cannot be left blank',
            'email.email'=>'Wrong email format',
            'password.required' =>'Password cannot be left blank',
            'password.min' =>'Password must be at least 6 characters',
            'password.max' =>'Password up to 32 characters',

        ];
    }
}
