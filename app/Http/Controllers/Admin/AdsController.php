<?php

namespace App\Http\Controllers\Admin;

use App\Ads;
use App\Category;
use App\Gallery;
use App\Http\Requests\Admin\AdsRequest;
use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Services\ImageUpload;
use System\Auth\Auth;

class AdsController extends AdminController
{
    /**
     * Show the application ads index.
     */
    public function index()
    {
        $ads = Ads::all();
        return view('admin.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.ads.create', compact('categories'));
    }

    /**
     * Store a newly created resource in database.
     */
    public function store()
    {
        $request = new AdsRequest();
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $inputs['view'] = 0;
        $path = 'images/ads/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 532);
        Ads::create($inputs);
        return redirect("admin/ads");
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $advertise = Ads::find($id);
        $categories = Category::all();
        return view("admin.ads.edit", compact('advertise', 'categories'));
    }

    /**
     * Update the specified resource in database.
     */
    public function update($id)
    {
        $request = new AdsRequest();
        $inputs = $request->all();
        $inputs['id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $file = $request->file('image');
        if (!empty($file['tmp_name'])) {
            $path = 'images/ads/' . date('Y/M/d');
            $name = date('Y_m_d_H_i_s_') . rand(10, 99);
            $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 800, 532);
        }
        Ads::update($inputs);
        return redirect("admin/ads");
    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Ads::delete($id);
        return back();
    }

    /**
     * Show the form for creating, deleting a new resource.
     */
    public function gallery($id)
    {
        $advertise = Ads::find($id);
        $galleries = Gallery::where('advertise_id', $id)->get();
        return view("admin.ads.gallery", compact('advertise', 'galleries'));
    }

    /**
     * Store a newly created resource in database.
     */
    public function storeGalleryImage($id)
    {
        $request = new GalleryRequest();
        $inputs = [];
        $inputs['advertise_id'] = $id;
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
