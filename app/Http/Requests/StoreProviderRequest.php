<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProviderRequest extends FormRequest
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
            'last_name'  => 'required|max:255',
            'phone_number' => 'required|max:255'
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
            'last_name.required' => 'El :attribute es obligatorio.',
            'phone_number.required' => 'Añade el :attribute.'
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
            'first_name' => 'nombre del proveedor',
            'last_name' => 'apellido del proveedor',
            'phone_number' => 'número de teléfono del proveedor'
        ];
    }
}
