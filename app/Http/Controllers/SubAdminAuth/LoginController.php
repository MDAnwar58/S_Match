<?php

namespace App\Http\Controllers\SubAdminAuth;

use Session;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
    	return view('backend_auth.sub_admin_login');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'email' => 'required',
    		'password' => 'required',
    	]);

    	if (Auth::guard('auth')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
    		return redirect()->route('sub_admin.home');
    	}else{
    		Session::flash('error_msg', 'login is failed!');
    		return redirect()->back();
    	}
    }
}
