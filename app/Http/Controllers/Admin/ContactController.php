<?php

namespace App\Http\Controllers\Admin;

use App\Contact;

class ContactController extends AdminController
{

    /**
     * Show the application posts index.
     */
    public function index()
    {
        $messages = Contact::all();
        return view('admin.contact.index', compact('messages'));
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit($id)
    {
        $message = Contact::find($id);
        return view('admin.contact.edit', compact('message'));
    }

    /**
     * Remove the specified resource from database.
     */
    public function destroy($id)
    {
        Contact::delete($id);
        return back();
    }
}
