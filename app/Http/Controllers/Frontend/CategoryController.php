<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\AllCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
    	$category = Category::where('slug', $slug)->first();
		$galleries = Gallery::orderBy('id', 'DESC')->where('category_id', $category->id)->get();
		$allcategories =  AllCategory::all();
		$categories = Category::orderBy('id', 'ASC')->get();
		return view('frontend.gallery.show', compact('galleries', 'allcategories', 'categories'));
    }
}
