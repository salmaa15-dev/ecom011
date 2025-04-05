<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => 'required|max:100|min:5|unique:products,title,'.$this->product,
            'view' => 'numeric',
            'description' => 'required|max:500|min:5',
            'categorir_id' => 'numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|gt:0|regex:/^\d+(\.\d{1,2})?$/',
            'sale' => 'nullable|gte:0|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }
}
