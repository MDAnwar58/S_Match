<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
    	$sections = Section::orderBy('id', 'ASC')->get();
    	return view('frontend.section.index', compact('sections'));
    }
}
