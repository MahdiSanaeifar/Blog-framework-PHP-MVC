<?php

namespace App\Http\Requests;

use System\Request\Request;

class UserCommentRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'comment' => 'required|max:500',
        ];
    }
}
