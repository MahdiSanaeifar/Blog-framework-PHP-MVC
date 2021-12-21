<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use System\Auth\Auth;

class AdminController extends Controller
{
    /**
     * check user logged in and user type is 'Amin'
     */
    public function __construct()
    {
        /**
         * if you want to login with ID use this code :
         *  => Auth::loginById(1);
         */
        Auth::loginById(1);
        Auth::check();
        if (Auth::user()->user_type != 'admin') {
            redirect('/login');
            exit;
        }
    }

    /**
     * Show the application admin dashboard.
     */
    public function index()
    {
        return view("admin.index");
    }
}
