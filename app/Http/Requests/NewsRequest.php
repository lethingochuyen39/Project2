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
            'news_topic' => 'required|min:5|max:30',
            'news_content' => 'required|min:10|max:1000',
            'news_image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'news_date.required' => 'Date is required',
            'news_topic.min' => 'Minimum of topic is 5',
            'news_topic.max' => 'Maximum of username is 30',
            'news_content.min' => 'Minimum of topic is 10',
            'news_content.max' => 'Maximum of username is 1000',
            'news_image.required' => 'Image is required',
            // 'news_image.image' => 'Image must be images',
            // 'news_image.mimes' => 'Image must be jpg, jpeg, bmp, png',
            // 'new_image.max' => 'Maximum of images is 10240'
        ];
    }
}
