<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AllCategory;
use App\Models\Category;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllCategoryController extends Controller
{
    public function show($slug)
    {
    	$allcategory = AllCategory::where('slug', $slug)->first();
		$galleries = Gallery::orderBy('id', 'DESC')->where('allcategory_id', $allcategory->id)->get();
		$allcategories =  AllCategory::all();
		$categories = Category::orderBy('id', 'ASC')->get();
		return view('frontend.gallery.show', compact('galleries', 'allcategories', 'categories'));
    }
}
