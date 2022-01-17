<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\SystemRequest;
use App\Http\Services\ImageUpload;
use App\System;
use System\Config\Config;

class SystemController extends AdminController
{

    /**
     * Show the application category index.
     */
    public function index()
    {
        $sections = System::all();
        return view('admin.system.index', compact('sections'));
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit()
    {
        $section = System::all();
        return view('admin.system.edit', compact('section'));
    }

    /**
     * Update the specified resource in database.
     */
    public function update()
    {
        $request = new SystemRequest();
        $inputs = $request->all();
        //save socialmedia links to database
        System::update(['id' => 1, 'content' => $inputs['facebook']]);
        System::update(['id' => 2, 'content' => $inputs['instagram']]);
        System::update(['id' => 3, 'content' => $inputs['pinterest']]);
        System::update(['id' => 4, 'content' => $inputs['twitter']]);
        System::update(['id' => 5, 'content' => $inputs['googleplus']]);

        //save images
        if (!empty(($request->file('logo'))['tmp_name'])) {
            unlink(Config::get('app.BASE_DIR') . '/public/images/logo.png');
            $path = 'images/';
            $name = 'logo';
            ImageUpload::UploadAndFitImage($request->file('logo'), $path, $name, 120, 40);
        }
        if (!empty(($request->file('sidebar-image'))['tmp_name'])) {
            unlink(Config::get('app.BASE_DIR') . '/public/images/sidebar-image.png');
            $path = 'images/';
            $name = 'sidebar-image';
            ImageUpload::UploadAndFitImage($request->file('sidebar-image'), $path, $name, 280, 230);
        }
        if (!empty(($request->file('center-page-image'))['tmp_name'])) {
            unlink(Config::get('app.BASE_DIR') . '/public/images/center-page-image.png');
            $path = 'images/';
            $name = 'center-page-image';
            ImageUpload::UploadAndFitImage($request->file('center-page-image'), $path, $name, 1000, 130);
        }

        flash('success', 'System settings updated successfully');
        return redirect('admin/system');
    }

}
