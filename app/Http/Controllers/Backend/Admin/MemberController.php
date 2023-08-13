<?php

namespace App\Http\Controllers\Backend\Admin;

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
        $this->middleware('admin');
    }
    public function index()
    {
    	$users = User::orderBy('id', 'DESC')->get();
    	return view('backend.admin.member.index', compact('users'));
    }

    public function statusChange($id)
    {
    	$user = User::select('role')->where('id', $id)->first();
    	if ($user->role == 0) {
    		$role = 2;
    	}elseif($user->role == 2){
    		$role = 1;
    	}elseif ($user->role == 1) {
            $role = 3;
    	}elseif ($user->role == 3) {
            $role = 2;
        }
    	User::where('id', $id)->update(['role'=>$role]);
    	return redirect()->route('admin.member.index');
    }
}
