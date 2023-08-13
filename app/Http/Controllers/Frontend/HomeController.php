<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Latest;
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
        $latests = Latest::orderBy('id', 'DESC')->where('role', 1)->paginate(10);
    	return view('frontend.home.index', compact('latests'));
    }
}
