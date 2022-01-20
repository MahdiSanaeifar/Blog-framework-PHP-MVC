<?php

use System\Router\Web\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell the URI it should respond to using a 
| Closure or controller method. These routes are loaded by the
| Application::registerRoutes.
|
*/


/*
| These routes for Home (app) pages.
*/
// Home routes
Route::get('/', 'HomeController@index', 'home.index');
Route::get('/home', 'HomeController@index', 'home.home');
Route::get('/about', 'HomeController@about', 'home.about');
Route::get('/contact', 'HomeController@contact', 'home.contact');
Route::get('/posts', 'HomeController@allPost', 'home.all.post');
Route::get('/post/{id}', 'HomeController@post', 'home.post');
Route::get('/category/{id}', 'HomeController@category', 'home.category');
Route::get('/tag/{slug}', 'HomeController@tag', 'home.tag');
Route::post('/post/comment/{id}', 'HomeController@comment', 'home.post.comment');
Route::post('/subscriber', 'HomeController@subscriber', 'home.subscriber');
Route::get('/search', 'HomeController@search', 'home.search');
Route::post('/contact', 'HomeController@sendMessage', 'home.contact.message');

// Home Ajax routes
Route::get('/ajax-last-posts', 'HomeController@ajaxLastPosts', 'home.last.posts');



/*
| These routes for Admin pages.
*/

// Admin  Home
Route::get('/admin', 'Admin\AdminController@index', 'admin.index');

// Category routes
Route::get('/admin/category', 'Admin\CategoryController@index', 'admin.category.index');
Route::get('/admin/category/create', 'Admin\CategoryController@create', 'admin.category.create');
Route::post('/admin/category/store', 'Admin\CategoryController@store', 'admin.category.store');
Route::get('/admin/category/edit/{id}', 'Admin\CategoryController@edit', 'admin.category.edit');
Route::put('/admin/category/update/{id}', 'Admin\CategoryController@update', 'admin.category.update');
Route::delete('/admin/category/delete/{id}', 'Admin\CategoryController@destroy', 'admin.category.delete');

// Post routes
Route::get('/admin/post', 'Admin\PostController@index', 'admin.post.index');
Route::get('/admin/post/create', 'Admin\PostController@create', 'admin.post.create');
Route::post('/admin/post/store', 'Admin\PostController@store', 'admin.post.store');
Route::get('/admin/post/edit/{id}', 'Admin\PostController@edit', 'admin.post.edit');
Route::put('/admin/post/update/{id}', 'Admin\PostController@update', 'admin.post.update');
Route::delete('/admin/post/delete/{id}', 'Admin\PostController@destroy', 'admin.post.delete');
Route::get('/admin/post/gallery/{id}', 'Admin\PostController@gallery', 'admin.post.gallery');
Route::post('/admin/post/store-gallery-image/{id}', 'Admin\PostController@storeGalleryImage', 'admin.post.store.gallery.image');
Route::get('/admin/post/delete-gallery-image/{gallery_id}', 'Admin\PostController@deleteGalleryImage', 'admin.post.delete.gallery.image');

// Ads routes
// Route::get('/admin/ads', 'Admin\AdsController@index', 'admin.ads.index');
// Route::get('/admin/ads/create', 'Admin\AdsController@create', 'admin.ads.create');
// Route::post('/admin/ads/store', 'Admin\AdsController@store', 'admin.ads.store');
// Route::get('/admin/ads/edit/{id}', 'Admin\AdsController@edit', 'admin.ads.edit');
// Route::put('/admin/ads/update/{id}', 'Admin\AdsController@update', 'admin.ads.update');
// Route::delete('/admin/ads/delete/{id}', 'Admin\AdsController@destroy', 'admin.ads.delete');
// Route::get('/admin/ads/gallery/{id}', 'Admin\AdsController@gallery', 'admin.ads.gallery');
// Route::post('/admin/ads/store-gallery-image/{id}', 'Admin\AdsController@storeGalleryImage', 'admin.ads.store.gallery.image');
// Route::get('/admin/ads/delete-gallery-image/{gallery_id}', 'Admin\AdsController@deleteGalleryImage', 'admin.ads.delete.gallery.image');

// Comment routes
Route::get('/admin/comment', 'Admin\CommentController@index', 'admin.comment.index');
Route::get('/admin/comment/show/{id}', 'Admin\CommentController@show', 'admin.comment.show');
Route::get('admin/comment/approved/{id}', 'Admin\CommentController@approved', 'admin.comment.approved');
Route::post('admin/comment/answer/{id}', 'Admin\CommentController@answer', 'admin.comment.answer');

// User routes
Route::get('/admin/user', 'Admin\UserController@index', 'admin.user.index');
Route::get('/admin/user/edit/{id}', 'Admin\UserController@edit', 'admin.user.edit');
Route::put('/admin/user/update/{id}', 'Admin\UserController@update', 'admin.user.update');
Route::get('admin/user/change-status/{id}', 'Admin\UserController@changeStatus', 'admin.user.change.status');

// Auth routes
Route::get('/login', 'Auth\LoginController@view', 'auth.login.view');
Route::post('/login', 'Auth\LoginController@login', 'auth.login');
Route::get('/register', 'Auth\RegisterController@view', 'auth.register.view');
Route::post('/register', 'Auth\RegisterController@register', 'auth.register');
Route::get('/activation/{token}', 'Auth\RegisterController@activation', 'auth.activation');
Route::get('/forgot', 'Auth\ForgotController@view', 'auth.forgot.password');
Route::post('/forgot', 'Auth\ForgotController@forgot', 'auth.forgot');
Route::get('/reset-password/{token}', 'Auth\ResetPasswordController@view', 'auth.reset-password.view');
Route::post('/reset-password/{token}', 'Auth\ResetPasswordController@resetPassword', 'auth.reset-password');
Route::get('/logout', 'Auth\LogoutController@logout', 'auth.logout');

//Subscriber routes
Route::get('/admin/subscriber', 'Admin\SubscriberController@index', 'admin.subscriber.index');
Route::delete('admin/subscriber/delete/{id}', 'Admin\SubscriberController@destroy', 'admin.subscriber.delete');

//widget
Route::get('/admin/widget', 'Admin\WidgetController@index', 'admin.widget.index');
Route::put('/admin/widget/update', 'Admin\WidgetController@update', 'admin.widget.update');

//contact
Route::get('/admin/contact', 'Admin\ContactController@index', 'admin.contact.index');
Route::get('/admin/contact/edit/{id}', 'Admin\ContactController@edit', 'admin.contact.edit');

// Tag routes
Route::get('/admin/tag', 'Admin\TagController@index', 'admin.tag.index');
Route::get('/admin/tag/create', 'Admin\TagController@create', 'admin.tag.create');
Route::post('/admin/tag/store', 'Admin\TagController@store', 'admin.tag.store');
Route::get('/admin/tag/edit/{id}', 'Admin\TagController@edit', 'admin.tag.edit');
Route::put('/admin/tag/update/{id}', 'Admin\TagController@update', 'admin.tag.update');
Route::delete('/admin/tag/delete/{id}', 'Admin\TagController@destroy', 'admin.tag.delete');

//system
Route::get('/admin/system', 'Admin\SystemController@index', 'admin.system.index');
Route::get('/admin/system/edit', 'Admin\SystemController@edit', 'admin.system.edit');
Route::put('/admin/system/update', 'Admin\SystemController@update', 'admin.system.update');

// Menu routes
Route::get('/admin/menu', 'Admin\MenuController@index', 'admin.menu.index');
Route::get('/admin/menu/create', 'Admin\MenuController@create', 'admin.menu.create');
Route::post('/admin/menu/store', 'Admin\MenuController@store', 'admin.menu.store');
Route::get('/admin/menu/edit/{id}', 'Admin\MenuController@edit', 'admin.menu.edit');
Route::put('/admin/menu/update/{id}', 'Admin\MenuController@update', 'admin.menu.update');
Route::delete('/admin/menu/delete/{id}', 'Admin\MenuController@destroy', 'admin.menu.delete');
