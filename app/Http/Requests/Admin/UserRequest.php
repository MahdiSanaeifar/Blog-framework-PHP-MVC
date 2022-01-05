<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class UserRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'username' => 'required|max:191',
            'avatar' => 'file|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
