<?php

namespace App\Http\Requests\Transaction;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionCreateRequest extends FormRequest
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
            'invoice' => 'required|uuid|max:36',
            'shipping_cost' => 'required|numeric|regex:/[0-9]/',
            'courier' => 'required|string',
            'total' => 'required|numeric|regex:/[0-9]/',
            'users_id' => [
                'required',
                'string',
                Rule::exists('users', 'id')->whereNull('deleted_at')
            ],
            'discount' => 'required|numeric',
            'status' => 'required|string',
            'delivery_address' => 'required|string|max:255'
        ];
    }
}
