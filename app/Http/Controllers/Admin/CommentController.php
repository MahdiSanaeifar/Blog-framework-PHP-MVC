<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Requests\Admin\CommentRequest;
use System\Auth\Auth;

class CommentController extends AdminController
{

    /**
     * Show the application comments index.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('admin.comment.show', compact('comment'));
    }

    /**
     * Change the status of comment 'Approved' or 'UnApproved'.
     */
    public function approved($id)
    {
        $comment = Comment::find($id);
        if ($comment->approved == 0) {
            $comment = Comment::update(['id' => $id, 'approved' => 1]);
        } else {
            $comment = Comment::update(['id' => $id, 'approved' => 0]);
        }
        return back();
    }

    /**
     * Store a newly answer from admin to comment in database.
     */
    public function answer($id)
    {
        $comment = Comment::find($id);
        $request = new CommentRequest();
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['post_id'] = $comment->post_id;
        $inputs['parent_id'] = $comment->id;
        $inputs['approved'] = 1;
        $inputs['status'] = 1;
        Comment::create($inputs);
        return redirect('admin/comment');
    }

}
