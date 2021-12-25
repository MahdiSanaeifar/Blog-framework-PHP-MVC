<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Gallery;
use App\Category;
use System\Auth\Auth;
use App\Http\Services\ImageUpload;
use App\Http\Requests\Admin\PostRequest;
use App\Http\Requests\Admin\GalleryRequest;

class PostController extends AdminController
{

    /**
     * Show the application posts index.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in database.
     */
    public function store()
    {
        $request = new PostRequest();
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $path = 'images/posts/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 499);
        Post::create($inputs);
        return redirect('admin/post');
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in database.
     */
    public function update($id)
    {
        $request = new PostRequest();
        $inputs = $request->all();
        $inputs['id'] = $id;
        $file = $request->file('image');
        if (!empty($file['tmp_name'])) {
            $path = 'images/posts/' . date('Y/M/d');
            $name = date('Y_m_d_H_i_s_') . rand(10, 99);
            $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 499);
        }
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        Post::update($inputs);
        return redirect('admin/post');

    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Post::delete($id);
        return back();
    }

    /**
     * Show the form for creating, deleting a new resource.
     */
    public function gallery($id)
    {
        $post = Post::find($id);
        $galleries = Gallery::where('post_id', $id)->get();
        return view("admin.post.gallery", compact('post', 'galleries'));
    }

    /**
     * Store a newly created resource in database.
     */
    public function storeGalleryImage($id)
    {
        $request = new GalleryRequest();
        $inputs = [];
        $inputs['post_id'] = $id;
        $path = 'images/gallery/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 730, 400);
        Gallery::create($inputs);
        return back();
    }

    /**
     * Remove the specified resource from database.
     */
    public function deleteGalleryImage($gallery_id)
    {
        Gallery::delete($gallery_id);
        return back();
    }
}
