<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSellerRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name'  => 'required|max:255'
        ];
    }
    
    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    
    public function messages()
    {
        return [
            'first_name.required' => 'El :attribute es obligatorio.',
            'last_name.required' => 'El :attribute es obligatorio.'
        ];
    }
    
     /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'first_name' => 'nombre del vendedor',
            'last_name' => 'apellido del vendedor'
        ];
    }
}
