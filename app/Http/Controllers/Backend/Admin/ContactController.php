<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
    	$contacts = Contact::orderBy('id', 'DESC')->paginate(10);
    	return view('backend.admin.contact.index', compact('contacts'));
    }
    public function show($id)
    {
    	$contact = Contact::findOrFail(intval($id));
        $contact->role = 1;
        $contact->save();

    	return view('backend.admin.contact.show', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail(intval($id));
        $contact->delete();

        return redirect()->route('support.user')->with('success', 'The Report Has Been Deleted Successfully');
    }
}
