<?php

namespace App\Http\Requests\Auth;

use System\Request\Request;

class RegisterRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    protected function rules()
    {
        return [
            'email' => "required|max:64|email|unique:users,email",
            'password' => "required|min:8|confirmed",
            'username' => "required",
            'avatar' => "required|file|mimes:jpeg,jpg,png|max:2048",
        ];
    }
}
