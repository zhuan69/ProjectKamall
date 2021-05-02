<?php

namespace App\Http\Requests\Transaction;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionUpdateRequest extends FormRequest
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
            'transaction_id'=>[
                'required',
                'numeric',
                Rule::exists('transactions','id')->whereNull('deleted_at')
            ],
            'shipping_cost' => 'numeric|regex:/[0-9]/',
            'courier' => 'string',
            'total' => 'numeric|regex:/[0-9]/',
            'users_id' => [
                'required',
                'string',
                Rule::exists('users', 'id')->whereNull('deleted_at')
            ],
            'discount' => 'numeric',
            'status' => 'required|string',
        ];
    }
}
