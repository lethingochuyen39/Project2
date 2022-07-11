<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class ContactRequest extends FormRequest
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
            'feedback_name' => 'Required|string|min:3|max:100',
            'feedback_email' => 'Required|email',
            'feedback_content' => 'Required|string|min:50|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'feedback_name.required'=>'Bạn chưa nhập họ tên!',
            'feedback_name.min'=>'Họ tên ít nhất là 3 ký tự!',
            'feedback_name.max'=>'Họ tên dài nhất là 100 ký tự!',

            'feedback_email.required'=>'Bạn chưa nhập e-mail!',
            'feedback_email.email'=>'Email không đúng định dạng!',

            'feedback_content.required'=>'Bạn chưa nhập nội dung phản hồi!',
            'feedback_content.min'=>'Nội dung ít nhất là 50 ký tự!',
            'feedback_content.max'=>'Nội dung dài nhất là 1000 ký tự!'

        ];
    }
}
