<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class GalleryRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
        ];
    }
}
