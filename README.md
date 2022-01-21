# Welcome to the PHP MVC framework

This is a special `PHP MVC framework` for building web applications in PHP. It's free and open-source.

This is my first experience of this level of programming, Of course, I have worked with Magento2 before it.

## Starting an application using this framework

1. First, download the framework, either directly or by cloning the repo.
1. Run composer update to install the project dependencies.
1. Configure your web server to have the **public** folder as the web root.
1. Open [config/app.php](config/app.php), [config/database.php](config/database.php), [config/mail.php](config/mail.php) and enter your configuration data.
1. Create routes, add controllers, views and models.

See below for more details.

## Configuration

Configuration settings are stored in the [config/app.php](config/app.php), [config/database.php](config/database.php), [config/mail.php](config/mail.php) files. You can access the settings in your code like this: `Config::get('filename(app,database,mail).value(CURRENT_ROUTE, .etc)')`. You can add your own configuration settings in this files.

## Routing

The [Web Router](routes) translates URLs into controllers and actions. Web and Api routes are reserved in the [web router](routes/web.php) and [api router](routes/api.php). A sample route is:

To show (GET):
```php
Route::get('url', 'directoryName\conntrollerName@method', 'routeName');
Route::get('/admin/post', 'Admin\PostController@index', 'admin.post.index');
```

To store (POST):
```php
Route::post('/admin/category/store', 'Admin\CategoryController@store', 'admin.category.store');
```

To update (PUT):
```php
   Route::put('/admin/category/update/{id}', 'Admin\CategoryController@update', 'admin.category.update');
   ```
```html
<input type="hidden" name="_method" value="put">
   ```
> __Note:__ PUT method is working with input with type `hidden`, with value `put` 

To destroy (delete):
```php
Route::delete('/admin/category/delete/{id}', 'Admin\CategoryController@destroy', 'admin.category.delete');
   ```

Routes are added with the `POST`,`PUT`,`GET`,`delete` method.

---
Or you can add route **variables**, like this:

```php
Route::delete('{controller}/{action}');
```

## Controllers

Controllers respond to user actions (clicking on a link, submitting a form etc.). Controllers are classes that extend the [Controller.php](app/Http/Controllers/Controller.php) class.

Controllers are stored in the `app/Http/Controllers/Controller.php` folder. A sample [Home controller](app/Http/Controllers/HomeController.php) included. Controller classes need to be in the `App\Http\Controllers` namespace.

Controller classes contain methods that are the actions.
- To show an view, add the **`index`,`edit`,`create`** suffix to the method name.
- To store form data to database, add the **`store`** suffix to the method name.
- To update database data, add the **`update`** suffix to the method name.
- To delete database row, add the **`destroy`** suffix to the method name.
etc.

You can access route parameters (for example the **id**) with:

```php
public function edit($id)
{
  /** - */
}
```

You can also get form data with:

```php
public function store()
{
  $request = new NameRequest();
  $inputs = $request->all(); //get all data
  $inputs = $request->file(); //get all file uploaded
}
```


is updating...