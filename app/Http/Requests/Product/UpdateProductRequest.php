<?php

namespace App\Http\Requests\Product;

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
            'name' => 'string|regex:/[A-Za-z0-9]/|min:5|max:255',
            'description' => 'string',
            'stock' => 'numeric|regex:/[0-9]/|min:1',
            'price' => 'numeric|regex:/[0-9]/',
            'categories_id' => 'numeric|regex:/[0-9]/',
            'discount' => 'nullable|numeric|regex:/[0-9]/',
            'product_image'=>'string|max:255'
        ];
    }
}
