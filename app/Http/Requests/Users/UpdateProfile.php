<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
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
            'username' => 'string|regex:/[A-Za-z0-9]/|unique:users|min:3',
            'password' => 'string|regex:/[A-Za-z0-0]/|min:4',
            'name' => 'string|regex:/[A-Za-z]/|max:255',
            'email' => 'email|unique:users',
            'phone_number' => 'string|regex:/[0-9]/',
            'roles_id' => 'numeric',
            'address'=>'string'
        ];
    }
}
