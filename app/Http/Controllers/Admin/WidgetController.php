<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Widget1;
use App\Widget2;
use App\Widget3;
use App\Category;
use App\Http\Requests\Admin\WidgetRequest;

class WidgetController extends AdminController
{

    /**
     * Show the application posts index.
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $widget1 = Widget1::all();
        $widget2 = Widget2::all();
        $widget3 = Widget3::all();
        return view('admin.widget.index', compact('posts', 'widget1', 'widget2', 'widget3', 'categories'));
    }

    /**
     * Update the specified resource in database.
     */
    public function update()
    {
        $request = new WidgetRequest();
        $inputs = $request->all();
        $values = ['id' => 1];
        if (isset($inputs['w-1-1'])) {
            foreach ($inputs as $input) {
                if ($input == 'put') {
                    continue;
                }
                $values['post_id'] = $input;
                Widget1::update($values);
                $values['id']++;
            }
        } elseif (isset($inputs['w-2-1'])) {
            foreach ($inputs as $input) {
                if ($input == 'put') {
                    continue;
                }
                $values['cat_id'] = $input;
                Widget2::update($values);
                $values['id']++;
            }
        } elseif (isset($inputs['w-3-1'])) {
            foreach ($inputs as $input) {
                if ($input == 'put') {
                    continue;
                }
                $values['cat_id'] = $input;
                Widget3::update($values);
                $values['id']++;
            }
        }
        flash('success','Widget updated successfully');
        return redirect('admin/widget');
    }
}
