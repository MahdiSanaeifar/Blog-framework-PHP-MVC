<?php

namespace App\Http\Controllers\Auth;


use System\Auth\Auth;

class LogoutController
{
    private $redirectTo = '/home';

    public function logout()
    {
        Auth::logout();
        flash('success','You logged out successfully');
        return redirect($this->redirectTo);
    }
}