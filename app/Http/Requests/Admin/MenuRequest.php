<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class MenuRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'title' => "required|max:191",
            'parent_id' => "exists:menus,id",
            'url' => "required|max:200",
        ];
    }
}
