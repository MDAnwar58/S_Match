<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\AllCategory;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
	public function index()
	{
		$galleries = Gallery::orderBy('id', 'DESC')->get();
		$categories = Category::orderBy('id', 'ASC')->get();
		$allcategories =  AllCategory::all();
		return view('frontend.gallery.index', compact('galleries', 'allcategories', 'categories'));
	}
}
