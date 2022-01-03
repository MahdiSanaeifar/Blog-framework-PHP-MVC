<?php

namespace App\Http\Requests\Auth;

use System\Request\Request;

class LoginRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    protected function rules()
    {
        return [
            'email' => "required|max:64|email",
            'password' => "required",
        ];
    }
}
