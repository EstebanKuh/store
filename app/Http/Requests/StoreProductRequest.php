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
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|integer|exists:categories,id',
            'amount' => 'required|numeric|min:0',
            'provider_id' => 'required|integer|exists:providers,id'
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
            'name.required' => 'El :attribute es obligatorio.',
            'price.required' => 'Añade un :attribute al producto',
            'price.min' => 'El :attribute debe ser mínimo 0',
            'amount.required' => 'Añade una :attribute',
            'amount.numeric' => 'El :attribute debe ser un número',
            'amount.min' => 'El :attribute debe ser mínimo 0',
            'provider_id.required' => 'El :attribute es obligatorio'
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
            'name' => 'nombre del producto',
            'price' => 'precio de venta',
            'amount' => 'cantidad de producto',
            'category_id' => 'categoria del producto',
            'provider_id' => 'proveedor del producto'
        ];
    }
}
