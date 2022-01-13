<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends AdminController
{

    /**
     * Show the application category index.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in database.
     */
    public function store()
    {
        $request = new CategoryRequest();
        $inputs = $request->all();
        if (empty($request->parent_id)) {
            unset($inputs['parent_id']);
        }

        Category::create($inputs);
        flash('success','category created successfully');
        return redirect('admin/category');
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.category.edit', compact('category', 'categories'));

    }

    /**
     * Update the specified resource in database.
     */
    public function update($id)
    {
        $request = new CategoryRequest();
        $inputs = $request->all();
        Category::update(array_merge($inputs, ['id' => $id]));
        flash('success','category updated successfully');
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Category::delete($id);
        flash('success','category deleted successfully');
        return back();
    }

}
