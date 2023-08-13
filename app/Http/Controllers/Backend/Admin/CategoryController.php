<?php

namespace App\Http\Controllers\Backend\Admin;

use Auth;
use Str;
use App\Models\AllCategory;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::guard('admin')->user()) {
            return redirect()->route('admin.login');
        }else{
            $allcategories = AllCategory::all();
            $categories = Category::with('allcategory')->orderBy('id', 'DESC')->paginate(5);
            return view('backend.admin.category.index', compact('categories', 'allcategories'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //generate slug
        $slug = $this->generateSlug($request->name);
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'allcategory_id' => 'required',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->slug = $slug;
        $category->allcategory_id = $request->allcategory_id;
        $category->save();

        return redirect()->route('category.index')->with('success', 'New Category Is Added Successfully');
    }
    public function generateSlug($name)
    {
        $category = Category::where('name', $name)->get();
        if ($category->count() > 0) {
            $count = $category->count();
            $slug = Str::slug($name).'-'.$count;
        }else{
            $slug = Str::slug($name);
        }
        return $slug;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::guard('admin')->user()) {
            return redirect()->route('admin.login');
        }else{
            $category = Category::findOrFail(intval($id));
            $allcategories = AllCategory::all();
            return view('backend.admin.category.edit', compact('category', 'allcategories'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = Category::findOrFail(intval($id));
        //generate slug
        if ($category->name != $request->name) {
            $slug = $this->generateSlug($request->name);
        }else{
            $slug = $category->slug;
        }
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name' => 'required',
        ]);
        $category->name = $request->name;
        $category->slug = $slug;
        $category->allcategory_id = $request->allcategory_id;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail(intval($id));
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category Has Been Deleted Successfully');
    }
}
