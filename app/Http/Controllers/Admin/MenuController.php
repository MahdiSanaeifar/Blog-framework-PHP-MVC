<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\MenuRequest;
use App\Menu;

class MenuController extends AdminController
{

    /**
     * Show the application category index.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::whereNull('parent_id')->get();
        return view('admin.menu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in database.
     */
    public function store()
    {
        $request = new MenuRequest();
        $inputs = $request->all();
        if (empty($request->parent_id)) {
            unset($inputs['parent_id']);
        }

        Menu::create($inputs);
        flash('success', 'menu created successfully');
        return redirect('admin/menu');
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $menus = Menu::whereNull('parent_id')->get();
        return view('admin.menu.edit', compact('menu', 'menus'));
    }

    /**
     * Update the specified resource in database.
     */
    public function update($id)
    {
        $request = new MenuRequest();
        $inputs = $request->all();
        Menu::update(array_merge($inputs, ['id' => $id]));
        flash('success', 'Menu updated successfully');
        return redirect('admin/menu');
    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Menu::delete($id);
        flash('success', 'Menu deleted successfully');
        return back();
    }

}
