<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:15',
            'email' => 'Required|email',
            'password' => 'required',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Username is required',
            'name.min' => 'Minimum of username is 5',
            'name.max' => 'Maximum of username is 15',
            'password.required' => 'Password is required',
            'role.required' => 'Role is required',
            'email.required'=>'Email is required',
            'email.email'=>'Email can not format',
        ];
    }
}
