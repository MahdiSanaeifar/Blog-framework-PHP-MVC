<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class CommentRequest extends Request
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
