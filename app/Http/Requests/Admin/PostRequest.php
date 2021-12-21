<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class PostRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        if (methodField() == 'put') {
            return [
                'title' => 'required|max:191',
                'summary' => 'required',
                'body' => 'required',
                'cat_id' => 'required|exist:categories,id',
                'image' => 'file|mimes:jpeg,jpg,png,gif',
                'published_at' => 'required|date',
            ];
        } else {
            return [
                'title' => 'required|max:191',
                'summary' => 'required',
                'body' => 'required',
                'cat_id' => 'required|exist:categories,id',
                'image' => 'required|file|mimes:jpeg,jpg,png,gif',
                'published_at' => 'required|date',
            ];
        }

    }
}
