<?php

namespace App\Providers;

use App\Category;
use App\Post;
use System\View\Composer;

class AppServiceProvider extends Provider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {
        Composer::view(['app.category', 'app.tag', 'app.post', 'app.search', 'app.all-post'], function () {
            // $categories = Category::whereNull('parent_id')->orderBy('created_at', 'desc')->limit(0, 6)->get();
            $mostPopularPost = Post::where('published_at', '<=', date('Y-m-d H:i:s'))->orderBy('views', 'desc')->limit(0, 4)->get();
            return [
                "mostPopularPost" => $mostPopularPost
            ];
        });
    }
}
