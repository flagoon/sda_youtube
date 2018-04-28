<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YoutubeRequest extends FormRequest
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
            'film_link' => ['required', 'regex:/www.youtube.com/'],
            'category' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'film_link.required' => 'Can\'t add movie without a youtube link!',
            'film_link.regex' => 'It\' not a valid youtube link!',
            'category.required' => 'Choose at least one category'
        ];
    }
}
