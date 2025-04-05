<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class discount extends FormRequest
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
            'sale' => 'required|gt:0|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }
}
