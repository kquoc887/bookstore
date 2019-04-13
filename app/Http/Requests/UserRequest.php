<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtUsername'   => 'required|unique:users,username',
            'txtPassword'   => 'required',
            'txtRePassword' => 'required|same:txtPassword',
            'txtEmail'      => 'required|unique:users,email|regex:/^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/',
        ];
    }

    public function messages() {
        return [
               'txtUsername.required'   => 'Please Enter Username',
               'txtUsername.unique'     => 'Username is exists',
               'txtPassword.required'   => 'Please Enter Password',
               'txtRePassword.required' => 'Please Enter RePassword',
               'txtRePassword.same'     => 'Two Password Don\'t Match',
               'txtEmail.required'      => 'Please Enter Email',
               'txtEmail.unique'        => 'Email is exists',
               'txtEmail.regex'         => 'Email Error Syntax',
        ];
    }


}
