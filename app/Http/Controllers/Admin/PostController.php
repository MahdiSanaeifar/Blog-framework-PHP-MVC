<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Gallery;
use App\Category;
use App\PostTag;
use App\Tag;
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

        //unset tags from $inputs
        $tags = explode(',', $inputs['tags']);
        unset($inputs['tags']);

        //save post
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $path = 'images/posts/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 499);
        Post::create($inputs);

        //save tags
        $tags = Tag::whereIn('title', $tags)->get(['id']);//get tag id

        foreach ($tags as $tag) {
            //saving...
            PostTag::create([
                'post_id' => (Post::where('title', '=', $inputs['title'])->get(['id']))[0]->id,
                'tag_id' => $tag->id
            ]);
        }

        flash('success', 'Post created successfully');
        return redirect('admin/post');
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = PostTag::where('post_id','=',$id)->get();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in database.
     */
    public function update($id)
    {
        $request = new PostRequest();
        $inputs = $request->all();

        //unset tags from $inputs
        $tags = explode(',', $inputs['tags']);
        unset($inputs['tags']);

        //save pos
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

        //delete tags
        $oldTags = PostTag::where('post_id','=',$id)->get();
        foreach ($oldTags as $tag){
            PostTag::delete($tag->id);
        }

        //save tags
        $tags = Tag::whereIn('title', $tags)->get(['id']);//get tag id
        foreach ($tags as $tag) {
            //saving...
            PostTag::create([
                'post_id' => $id,
                'tag_id' => $tag->id
            ]);
        }

        flash('success', 'Post updated successfully');
        return redirect('admin/post');

    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Post::delete($id);
        flash('success', 'Post deleted successfully');
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
        flash('success', 'Image created successfully');
        return back();
    }

    /**
     * Remove the specified resource from database.
     */
    public function deleteGalleryImage($gallery_id)
    {
        Gallery::delete($gallery_id);
        flash('success', 'Image deleted successfully');
        return back();
    }
}
