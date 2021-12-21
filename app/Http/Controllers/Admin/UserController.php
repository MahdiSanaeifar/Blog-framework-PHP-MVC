<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserRequest;
use App\Http\Services\ImageUpload;
use App\User;

class UserController extends AdminController
{

    /**
     * Show the application users index.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in database.
     */
    public function update($id)
    {
        $request = new UserRequest();
        $inputs = $request->all();
        $updatables = ['username'];
        $inputs = array_intersect_key($inputs, array_flip($updatables));
        $inputs['id'] = $id;
        $file = $request->file('avatar');
        if (!empty($file['tmp_name'])) {
            $path = 'images/avatar/' . date('Y/M/d');
            $name = date('Y_m_d_H_i_s_') . rand(10, 99);
            $inputs['avatar'] = ImageUpload::UploadAndFitImage($request->file('avatar'), $path, $name, 100, 100);
        }
        User::update($inputs);
        return redirect('admin/user');
    }

    /**
     * Update the specified user permission.
     */
    public function changeStatus($id)
    {
        $user = User::find($id);
        if ($user->is_active == 0) {
            $user->is_active = 1;
        } else {
            $user->is_active = 0;
        }
        $user->save();
        return back();
    }

}
