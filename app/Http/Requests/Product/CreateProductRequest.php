<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|regex:/[A-Za-z0-9]/|min:5|max:255',
            'description' => 'required|string',
            'stock' => 'required|numeric|regex:/[0-9]/|min:1',
            'price' => 'required|numeric|regex:/[0-9]/',
            'categories_id' => 'required|numeric|regex:/[0-9]/',
            'discount' => 'nullable|numeric|regex:/[0-9]/',
            'product_image'=>'required|string|max:255'
        ];
    }
}
