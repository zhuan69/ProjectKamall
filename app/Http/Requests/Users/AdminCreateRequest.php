<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreateRequest extends FormRequest
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
            'username' => 'required|string|regex:/[A-Za-z0-9]/|unique:users|min:3',
            'password' => 'required|string|regex:/[A-Za-z0-0]/|min:4',
            'name' => 'required|string|regex:/[A-Za-z]/|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'string|regex:/[0-9]/',
            'roles_id' => 'numeric',
            'address'=>'string'
        ];
    }
}
