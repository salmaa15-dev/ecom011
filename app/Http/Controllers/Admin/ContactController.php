<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contacts()
    {
        return view('back-end.contact.list-contacts', ['contacts' => Contact::orderby('created_at', 'DESC')->paginate(15)]);
    }


    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect()->route('admin.contacts')->with('success', 'message deleted success');
    }
}