<?php

namespace App\Http\Controllers\Backend\Sub_Admin;

use Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Mile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MileController extends Controller
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
	  	if (!Auth::user()) {
	  		return redirect()->route('login');
	  	}elseif (Auth::user()->role == 1) {
	  		$miles = Mile::all();
	  		return view('backend.sub_admin.mile.index', compact('miles'));
	  	}
	  }
	  public function create()
	  {
	  	if (Auth::user()->role == 1) {
	  		$users = User::orderBy('id', 'DESC')->get();
	  		$admins = Admin::orderBy('id')->get();
	  		return view('backend.sub_admin.mile.create', compact('users', 'admins'));
	  	}elseif(!Auth::user()->role){
	  		return redirect()->route('sub.admin.login');
	  	}
	  }
	  public function store(Request $request)
	  {
	  	$validatedData = $request->validate([
	  		'name' => 'nullable|max:255|unique:miles,name',
	  	]);
	  	$mile = new Mile;
	  	$mile->name = $request->name;
	  	$mile->save();

	  	return redirect()->route('sub_admin.mile')->with('success', 'মিল তোলার জন্য নামটি লিস্টে জমা হয়ে গেছ্ ।');
	  }
	  public function storewithid(Request $reqeust ,$id)
	  {
	  	$mile = Mile::findOrFail(intval($id));
		// day1
	  	$mile->sokal1 = $reqeust->sokal1;
	  	$mile->dupur1 = $reqeust->dupur1;
	  	$mile->rattri1 = $reqeust->rattri1;
		// day2
	  	$mile->sokal2 = $reqeust->sokal2;
	  	$mile->dupur2 = $reqeust->dupur2;
	  	$mile->rattri2 = $reqeust->rattri2;
		// day3
	  	$mile->sokal3 = $reqeust->sokal3;
	  	$mile->dupur3 = $reqeust->dupur3;
	  	$mile->rattri3 = $reqeust->rattri3;
		// day4
	  	$mile->sokal4 = $reqeust->sokal4;
	  	$mile->dupur4 = $reqeust->dupur4;
	  	$mile->rattri4 = $reqeust->rattri4;
		// day5
	  	$mile->sokal5 = $reqeust->sokal5;
	  	$mile->dupur5 = $reqeust->dupur5;
	  	$mile->rattri5 = $reqeust->rattri5;
		// day6
	  	$mile->sokal6 = $reqeust->sokal6;
	  	$mile->dupur6 = $reqeust->dupur6;
	  	$mile->rattri6 = $reqeust->rattri6;
		// day7
	  	$mile->sokal7 = $reqeust->sokal7;
	  	$mile->dupur7 = $reqeust->dupur7;
	  	$mile->rattri7 = $reqeust->rattri7;
		// day8
	  	$mile->sokal8 = $reqeust->sokal8;
	  	$mile->dupur8 = $reqeust->dupur8;
	  	$mile->rattri8 = $reqeust->rattri8;
		// day9
	  	$mile->sokal9 = $reqeust->sokal9;
	  	$mile->dupur9 = $reqeust->dupur9;
	  	$mile->rattri9 = $reqeust->rattri9;
		// day10
	  	$mile->sokal10 = $reqeust->sokal10;
	  	$mile->dupur10 = $reqeust->dupur10;
	  	$mile->rattri10 = $reqeust->rattri10;
		// day11
	  	$mile->sokal11 = $reqeust->sokal11;
	  	$mile->dupur11 = $reqeust->dupur11;
	  	$mile->rattri11 = $reqeust->rattri11;
		// day12
	  	$mile->sokal12 = $reqeust->sokal12;
	  	$mile->dupur12 = $reqeust->dupur12;
	  	$mile->rattri12 = $reqeust->rattri12;
		// day13
	  	$mile->sokal13 = $reqeust->sokal13;
	  	$mile->dupur13 = $reqeust->dupur13;
	  	$mile->rattri13 = $reqeust->rattri13;
		// day14
	  	$mile->sokal14 = $reqeust->sokal14;
	  	$mile->dupur14 = $reqeust->dupur14;
	  	$mile->rattri14 = $reqeust->rattri14;
		// day15
	  	$mile->sokal15 = $reqeust->sokal15;
	  	$mile->dupur15 = $reqeust->dupur15;
	  	$mile->rattri15 = $reqeust->rattri15;
		// day16
	  	$mile->sokal16 = $reqeust->sokal16;
	  	$mile->dupur16 = $reqeust->dupur16;
	  	$mile->rattri16 = $reqeust->rattri16;
		// day17
	  	$mile->sokal17 = $reqeust->sokal17;
	  	$mile->dupur17 = $reqeust->dupur17;
	  	$mile->rattri17 = $reqeust->rattri17;
		// day18
	  	$mile->sokal18 = $reqeust->sokal18;
	  	$mile->dupur18 = $reqeust->dupur18;
	  	$mile->rattri18 = $reqeust->rattri18;
		// day19
	  	$mile->sokal19 = $reqeust->sokal19;
	  	$mile->dupur19 = $reqeust->dupur19;
	  	$mile->rattri19 = $reqeust->rattri19;
		// day20
	  	$mile->sokal20 = $reqeust->sokal20;
	  	$mile->dupur20 = $reqeust->dupur20;
	  	$mile->rattri20 = $reqeust->rattri20;
		// day21
	  	$mile->sokal21 = $reqeust->sokal21;
	  	$mile->dupur21 = $reqeust->dupur21;
	  	$mile->rattri21 = $reqeust->rattri21;
		// day22
	  	$mile->sokal22 = $reqeust->sokal22;
	  	$mile->dupur22 = $reqeust->dupur22;
	  	$mile->rattri22 = $reqeust->rattri22;
		// day23
	  	$mile->sokal23 = $reqeust->sokal23;
	  	$mile->dupur23 = $reqeust->dupur23;
	  	$mile->rattri23 = $reqeust->rattri23;
		// day24
	  	$mile->sokal24 = $reqeust->sokal24;
	  	$mile->dupur24 = $reqeust->dupur24;
	  	$mile->rattri24 = $reqeust->rattri24;
		// day25
	  	$mile->sokal25 = $reqeust->sokal25;
	  	$mile->dupur25 = $reqeust->dupur25;
	  	$mile->rattri25 = $reqeust->rattri25;
		// day26
	  	$mile->sokal26 = $reqeust->sokal26;
	  	$mile->dupur26 = $reqeust->dupur26;
	  	$mile->rattri26 = $reqeust->rattri26;
		// day27
	  	$mile->sokal27 = $reqeust->sokal27;
	  	$mile->dupur27 = $reqeust->dupur27;
	  	$mile->rattri27 = $reqeust->rattri27;
		// day28
	  	$mile->sokal28 = $reqeust->sokal28;
	  	$mile->dupur28 = $reqeust->dupur28;
	  	$mile->rattri28 = $reqeust->rattri28;
		// day29
	  	$mile->sokal29 = $reqeust->sokal29;
	  	$mile->dupur29 = $reqeust->dupur29;
	  	$mile->rattri29 = $reqeust->rattri29;
		// day30
	  	$mile->sokal30 = $reqeust->sokal30;
	  	$mile->dupur30 = $reqeust->dupur30;
	  	$mile->rattri30 = $reqeust->rattri30;
		// day31
	  	$mile->sokal31 = $reqeust->sokal31;
	  	$mile->dupur31 = $reqeust->dupur31;
	  	$mile->rattri31 = $reqeust->rattri31;

	  	$mile->total = $reqeust->total;
	  	$mile->save();

	  	return redirect()->route('sub_admin.mile')->with('success', 'মিল লিস্টে জমা হয়েছে।');
	  }
	}
