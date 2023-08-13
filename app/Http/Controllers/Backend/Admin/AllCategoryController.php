<?php

namespace App\Http\Controllers\Backend\Admin;

use Str;
use App\Models\AllCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllCategoryController extends Controller
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
        $allcategories = AllCategory::orderBy('id', 'ASC')->get();
        return view('backend.admin.allcategory.index', compact('allcategories'));
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
        $slug = $this->generateSlug($request->all_name);
        
        $validatedData = $request->validate([
            'all_name' => 'required|max:255|unique:all_categories,all_name',
        ]);
        $allcategory = new AllCategory;
        $allcategory->all_name = $request->all_name;
        $allcategory->slug = $slug;
        $allcategory->save();

        return redirect()->route('all.category.index')->with('success', 'All Category Is Added Successfully');
    }
    public function generateSlug($all_name)
    {
        $allcategory = AllCategory::where('all_name', $all_name)->get();
        if ($allcategory->count() > 0) {
            $count = $allcategory->count();
            $slug = Str::slug($all_name).'-'.$count;
        }else{
            $slug = Str::slug($all_name);
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
        $allcategory = AllCategory::findOrfail(intval($id));
        return view('backend.admin.allcategory.edit', compact('allcategory'));
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
        $allcategory = AllCategory::findOrFail(intval($id));
        //generate slug
        if ($allcategory->all_name != $request->all_name) {
            $slug = $this->generateSlug($request->all_name);
        }else{
            $slug = $allcategory->slug;
        }
        
        $validatedData = $request->validate([
            'all_name' => 'required|max:255|unique:all_categories,all_name',
        ]);
        $allcategory->all_name = $request->all_name;
        $allcategory->slug = $slug;
        $allcategory->save();

        return redirect()->route('all.category.index')->with('success', 'All Category Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allcategory = AllCategory::findOrFail(intval($id));
        $allcategory->delete();

        return redirect()->route('all.category.index')->with('success', 'All Category Has Been Deleted Successfully');
    }
}
