<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'news_date' => 'required',
            'news_topic' => 'required|min:5|max:200',
            'news_content' => 'required|min:30|max:1000',
            'news_image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'news_date.required' => 'Ngày không được để trống',
            'news_topic.required' => 'Bạn chưa nhập tiêu đề',
            'news_topic.min' => 'Tiêu đề ít nhất là 5 ký tự',
            'news_topic.max' => 'Tiêu đề dài nhất là 200 ký tự',
            'news_content.required' => 'bạn chưa nhập nội dung',
            'news_content.min' => 'Nội dung ít nhất là 30 ký tự',
            'news_content.max' => 'Nội dung dài nhất là 200 ký tự',
            'news_image.required' => 'Hình ảnh là bắt buộc'
            // 'news_image.image' => 'Image must be images',
            // 'news_image.mimes' => 'Image must be jpg, jpeg, bmp, png',
            // 'new_image.max' => 'Maximum of images is 10240'
        ];
    }
}
