<?php

namespace App\Http\Controllers\AdminAuth;

use Hash;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('backend_auth.admin_register');
    }
    public function store(Request $request)
    {
    	$validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:admins',
            'password' => 'required|min:6',
        ]);

    	$admin = new Admin;
    	$admin->name = $request->name;
    	$admin->email = $request->email;
    	$admin->password = Hash::make($request->password);
    	$admin->save();

    	return redirect()->route('admin.home')->with('success', 'Register has been successfully');
    }
}
