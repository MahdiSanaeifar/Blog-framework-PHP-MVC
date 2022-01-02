<?php

namespace App\Providers;

use App\Post;
use App\Widget1;
use App\Widget2;
use App\Widget3;
use System\View\Composer;

class WidgetProvider extends Provider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {
        Composer::view('app.index', function () {
            //sidebar posts
            $mostPopularPost = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('views', 'desc')->limit(0, 4)->get();
            //widget1
            $widget1 = Widget1::all();
            //widget2
            $widget2 = Widget2::all();
            $w_2_1 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget2[0]->cat_id)->orderBy('created_at', 'desc')->limit(0, 4)->get();
            $w_2_2 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget2[1]->cat_id)->orderBy('created_at', 'desc')->limit(0, 4)->get();
            $w_2_3 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget2[2]->cat_id)->orderBy('created_at', 'desc')->limit(0, 4)->get();
            $w_2_4 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget2[3]->cat_id)->orderBy('created_at', 'desc')->limit(0, 4)->get();
            //widget3
            $widget3 = Widget3::all();
            $w_3_1 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget3[0]->cat_id)->orderBy('created_at', 'desc')->limit(0, 5)->get();
            $w_3_2 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget3[1]->cat_id)->orderBy('created_at', 'desc')->limit(0, 5)->get();
            $w_3_3 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget3[2]->cat_id)->orderBy('created_at', 'desc')->limit(0, 5)->get();
            $w_3_4 = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->where('cat_id', '=', $widget3[3]->cat_id)->orderBy('created_at', 'desc')->limit(0, 5)->get();
            return [
                "widget1" => $widget1,
                "widget2" => $widget2,
                "widget3" => $widget3,
                "mostPopularPost" => $mostPopularPost,
                "w_2_1" => $w_2_1,
                "w_2_2" => $w_2_2,
                "w_2_3" => $w_2_3,
                "w_2_4" => $w_2_4,
                "w_3_1" => $w_3_1,
                "w_3_2" => $w_3_2,
                "w_3_3" => $w_3_3,
                "w_3_4" => $w_3_4,
            ];
        });
    }
}
