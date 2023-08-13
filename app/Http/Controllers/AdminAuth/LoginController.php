<?php

namespace App\Http\Controllers\AdminAuth;

use Auth;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
    	return view('backend_auth.admin_login');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'email' => 'required',
    		'password' => 'required',
    	]);

    	if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
    		return redirect()->route('admin.home');
    	}else{
    		Session::flash('error_msg', 'login is failed!');
    		return redirect()->back();
    	}
    }

    public function Logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect()->route('admin.login');
    }
}
