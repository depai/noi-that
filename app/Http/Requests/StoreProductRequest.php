<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:products,slug',
            'collection_id' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'required|max:2000',
            'rocks.*.name' => 'required|max:255',
            'size.*.name' => 'required|max:255'
        ];
    }

    public function attributes()
    {
        return [
            'rocks.*.name' => 'name of rock',
            'size.*.name' => 'name of size'
        ];
    }
}
