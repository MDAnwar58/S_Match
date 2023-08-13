<?php

namespace App\Http\Controllers\Backend\Sub_Admin;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
         * Create a new controller instance.
         *
         * @return void
         */
     public function __construct()
     {
        $this->middleware('auth');
    }
	public function index()
	{
		if (Auth::user()->role == 1) {
			return view('backend.sub_admin.home.index');
		}else{
	        return redirect()->route('login');		
		}
	}

}
