<?php



namespace App\Http\Requests\customers;



use Illuminate\Foundation\Http\FormRequest;



class CustomerRequest extends FormRequest

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

            'name' => 'required|max:100|min:4',

            'mobile' => 'required|max:50|min:5',

            'address' => 'required|max:400|min:10',

            'country' => 'required|max:60|min:4',

        ];

    }

}

