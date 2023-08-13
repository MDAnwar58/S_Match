<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Latest;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Facility;
use App\Models\Logo;
use App\Models\LearnAbout;
use App\Models\Section;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $latests = Latest::orderBy('id', 'DESC')->where('role', 1)->paginate(6);
    	$sections = Section::orderBy('id', 'DESC')->get();
    	$abouts = LearnAbout::all();
        $facilties = Facility::where('role', 1)->get();
        $banners = Banner::all();
        $logos = Logo::where('role', 1)->get();
    	$users = User::all();
    	return view('frontend.welcome', compact('users', 'logos', 'banners', 'facilties', 'abouts', 'sections', 'latests'));
    }
}
