<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email' => 'Required|email',
            'password'=>'Required|min:6|max:10'

        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Bạn chưa nhập e-mail!',
            'email.unique'=>'Email phải là duy nhất!',
            'email'=>'Email không đúng định dạng!',

            'password.required'=>'Bạn chưa nhập Mật khẩu!',
            'password.min'=>'Mật khẩu có ít nhất 6 ký tự chữ số!',
            'password.max'=>'Mật khẩu có nhiều nhất 10 ký tự chữ số!',
          
        ];
    }
}
