<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'image' => 'nullable|image|max:2048|mimes:jpeg,bmp,png,jpg',
            'title' => 'required|unique:categories,title,' .$this->id . ',id|max:50',
            'slug' => 'required|unique:categories,slug,' .$this->id . ',id|max:50',
        ];
    }
}
