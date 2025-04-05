<?php

namespace App\Http\Requests\settings;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
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
            'email' => 'max:50',
            'phone' => 'max:50',
            'instagram' => 'max:200',
            'facebook' => 'max:200',
            'map' => 'max:500',
            'description' => 'max:500',
            'adresse' => 'max:200',
            'logo_top' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_footer' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
