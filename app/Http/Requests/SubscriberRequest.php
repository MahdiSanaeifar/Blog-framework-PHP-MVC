<?php

namespace App\Http\Requests;

use System\Request\Request;

class SubscriberRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'email' => "required|max:64|email"
        ];
    }
}
