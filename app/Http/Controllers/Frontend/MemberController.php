<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
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
        $users = User::select("*")->whereNotNull('last_seen')->orderBy('last_seen', 'DESC')->get();
    	return view('frontend.member.index', compact('users'));
    }
}
