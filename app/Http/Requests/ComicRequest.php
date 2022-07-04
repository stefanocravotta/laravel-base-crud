<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:3',
            'image' => 'required|max:255|min:10',
            'type' => 'required|max:100|min:3'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo nome è obbligatorio',
            'title.max' => 'Il campo nome deve avere massimo :max caratteri',
            'title.min' => 'Il campo nome deve avere minimo :min caratteri',
            'image.required' => 'Il campo image è obbligatorio',
            'image.max' => 'Il campo image deve avere massimo :max caratteri',
            'image.min' => 'Il campo image deve avere minimo :min caratteri',
            'type.required' => 'Il campo type è obbligatorio',
            'type.max' => 'Il campo type deve avere massimo :max caratteri',
            'type.min' => 'Il campo type deve avere minimo :min caratteri',
        ];
    }
}
