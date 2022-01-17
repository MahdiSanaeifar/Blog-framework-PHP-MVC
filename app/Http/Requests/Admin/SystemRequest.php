<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class SystemRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'sidebar-image' => "file|mimes:png",
            'center-page-image' => "file|mimes:png",
            'logo' => "file|mimes:png",
            'facebook' => "required|max:191",
            'instagram' => "required|max:191",
            'pinterest' => "required|max:191",
            'twitter' => "required|max:191",
            'googleplus' => "required|max:191"
        ];
    }
}
