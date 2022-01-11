<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Widget1;
use App\Widget2;
use App\Category;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Subscriber;
use System\Auth\Auth;
use App\Http\Services\MailService;
use App\Http\Requests\SubscriberRequest;
use App\Http\Requests\UserCommentRequest;
use System\Database\DBBuilder\DBBuilder;

class HomeController extends Controller
{

    public function index()
    {
        $hotPosts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0, 4)->get(['title', 'id']);
        $recentPosts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0, 6)->get();
        $categories = Category::whereNull('parent_id')->orderBy('created_at', 'desc')->limit(0, 6)->get();
        return view('app.index', compact('hotPosts', 'recentPosts', 'categories'));
    }

    public function about()
    {
        return view('app.about');
    }

    public function contact()
    {
        return view('app.contact');
    }

    // public function ads($id)
    // {
    //     $advertise = Ads::find($id);
    //     $galleries = $advertise->galleries()->get();
    //     $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0, 4)->get();
    //     $relatedAds = Ads::where('cat_id', $advertise->cat_id)->where('id', '!=', $id)->orderBy('created_at', 'desc')->limit(0, 2)->get();
    //     $categories = Category::all();
    //     return view('app.ads', compact('posts', 'galleries', 'advertise', 'relatedAds', 'categories'));

    // }

    public function allPost()
    {
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->paginate(6);
        $postCount = count(Post::where('published_at', '<=', date('Y-m-d H:i:s'))->get());
        return view('app.all-post', compact('posts', 'postCount'));
    }

    public function post($id)
    {
        $post = Post::find($id);
        Post::update(['id' => $id, 'views' => $post->views + 1]);
        if (empty($post)) {
            $post = Post::orderBy('id', 'desc')->limit(0, 1)->get();
            $post = $post[0];
        }
        $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('id', '!=', $post->id)->orderBy('created_at', 'desc')->limit(0, 5)->get();
        $categories = Category::all();
        $comments = Comment::where('approved', 1)->whereNull('parent_id')->where('post_id', $post->id)->get();
        return view('app.post', compact('posts', 'post', 'categories', 'comments'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        if (!empty($category)) {
            $posts = Post::where('cat_id', '=', $id)->where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->paginate(2);
            $postCount = count(Post::where('cat_id', '=', $id)->get());
        }
        return view('app.category', compact('posts', 'category', 'postCount'));
    }

    public function comment($post_id)
    {
        $request = new UserCommentRequest();
        $inputs = $request->all();
        $inputs['post_id'] = $post_id;
        $inputs['approved'] = 0;
        $inputs['status'] = 0;
        $inputs['user_id'] = Auth::user()->id;
        $comment = Comment::create($inputs);
        return back();
    }

    public function subscriber()
    {
        $request = new SubscriberRequest();
        $inputs = $request->all();
        if (Auth::checkLogin()) {
            $inputs['user_id'] = Auth::user()->id;
        }
        $subscriber = Subscriber::create($inputs);
        return back();
    }

    public function search()
    {
        if (isset($_GET['search'])) {
            $search = '%' . $_GET['search'] . '%';
            $posts = Post::where('title', 'LIKE', $search)->orderBy('created_at', 'desc')->paginate(2);
            $postCount = count(Post::where('title', 'LIKE', $search)->get());
            return view('app.search', compact('posts', 'postCount'));
        } else {
            return back();
        }
    }

    public function sendMessage()
    {
        $request = new ContactRequest();
        $inputs = $request->all();
        $contact = Contact::create($inputs);
        return back();
    }
    
    // public function ajaxLastPosts()
    // {
        // //get data
    //     $posts = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('created_at', 'desc')->limit(0, 4)->get();
    //     foreach ($posts as $post) {
    //         $post->user = $post->user()->first_name . ' ' . $post->user()->last_name;
    //         unset($post->user_id);
    //         $post->created_at = \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%B %d، %Y');
    //         $post->url = route('home.post', [$post->id]);
    //     }

    //     header('Content-type: application/json');
    //     $result = json_encode($posts, JSON_UNESCAPED_UNICODE);
    //     echo $result;
    //     exit;
    // }

}
