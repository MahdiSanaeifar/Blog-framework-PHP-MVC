<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class WidgetRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        if (isset($_POST['w-1-1'])) {
            return [
                'w-1-1' => 'required|exists:posts,id',
                'w-1-2' => 'required|exists:posts,id',
                'w-1-3' => 'required|exists:posts,id',
                'w-1-4' => 'required|exists:posts,id',
            ];
        } else if (isset($_POST['w-2-1'])) {
            return [
                'w-2-1' => 'required|exists:categories,id',
                'w-2-2' => 'required|exists:categories,id',
                'w-2-3' => 'required|exists:categories,id',
                'w-2-4' => 'required|exists:categories,id',
            ];
        } else if (isset($_POST['w-3-1'])) {
            return [
                'w-3-1' => 'required|exists:categories,id',
                'w-3-2' => 'required|exists:categories,id',
                'w-3-3' => 'required|exists:categories,id',
                'w-3-4' => 'required|exists:categories,id',
            ];
        }

    }
}
