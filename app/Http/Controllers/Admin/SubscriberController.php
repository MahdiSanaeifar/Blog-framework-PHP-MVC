<?php

namespace App\Http\Controllers\Admin;

use App\Subscriber;
use System\Auth\Auth;

class SubscriberController extends AdminController
{

    /**
     * Show the application posts index.
     */
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscriber.index', compact('subscribers'));
    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Subscriber::delete($id);
        return back();
    }
}
