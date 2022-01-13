<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Http\Requests\Admin\TagRequest;

class TagController extends AdminController
{

    /**
     * Show the application category index.
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in database.
     */
    public function store()
    {
        $request = new TagRequest();
        $inputs = $request->all();
        Tag::create($inputs);
        flash('success','tag created successfully');
        return redirect('admin/tag');
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit', compact('tag'));

    }

    /**
     * Update the specified resource in database.
     */
    public function update($id)
    {
        $request = new TagRequest();
        $inputs = $request->all();
        Tag::update(array_merge($inputs, ['id' => $id]));
        flash('success','tag updated successfully');
        return redirect('admin/tag');
    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Tag::delete($id);
        flash('success','tag deleted successfully');
        return back();
    }

}
