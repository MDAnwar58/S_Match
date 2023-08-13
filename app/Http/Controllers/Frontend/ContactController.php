<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Jogajog;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function index()
	{
		$jogajogs = Jogajog::all();
		return view('frontend.contact.index', compact('jogajogs'));
	}

	public function store(Request $request)
	{
		$contact = new Contact;
		$contact->name = $request->name;
		$contact->email = $request->email;
		$contact->sub = $request->sub;
		$contact->msg = $request->msg;
		$contact->save();

		return redirect()->route('contact')->with('success', 'য়োগায়োগ করার জন্য ধন্যবাদ . আপনার রিকোয়েটি সম্পূর্ণ');
	}
}
