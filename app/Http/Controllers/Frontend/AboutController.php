<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\LearnAbout;
use App\Models\Facility;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	$abouts = LearnAbout::all();
    	$facilities = Facility::where('role', 1)->get();
    	return view('frontend.about.index', compact('users', 'abouts', 'facilities'));
    }
}
