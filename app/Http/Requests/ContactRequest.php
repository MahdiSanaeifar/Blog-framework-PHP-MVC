<?php

namespace App\Http\Requests;

use System\Request\Request;

class ContactRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'name' => "required|max:64",
            'email' => "required|max:64|email",
            'subject' => "required|max:64",
            'message' => "required"
        ];
    }
}
