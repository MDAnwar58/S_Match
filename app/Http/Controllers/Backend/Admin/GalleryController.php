<?php

namespace App\Http\Controllers\Backend\Admin;

use File;
use Auth;
use App\Models\AllCategory;
use App\Models\Category;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
            $galleries = Gallery::orderBy('id', 'DESC')->paginate(5);
            return view('backend.admin.gallery.index', compact('galleries'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::guard('admin')->user()) {
            return redirect()->route('admin.login');
        }else{
            $categories = Category::orderBy('id', 'DESC')->get();
            $allcategories = AllCategory::all();
            return view('backend.admin.gallery.create', compact('categories', 'allcategories'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'allcategory_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $gallery = new Gallery;
        $gallery->category_id = $request->category_id;
        $gallery->allcategory_id = $request->allcategory_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-gallery-'.$extension;
            $file->move('upload/images/', $filename);
            $gallery->image = $filename;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery Is Added Successfully');
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
            $gallery = Gallery::findOrFail(intval($id));
            $categories = Category::orderBy('id', 'DESC')->get();
            $categorie = Category::orderBy('id', 'DESC')->get();
            return view('backend.admin.gallery.edit', compact('gallery', 'categories', 'categorie'));
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
        $validatedData = $request->validate([
            'category_id' => 'integer',
            'all' => 'integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $gallery = Gallery::findOrFail(intval($id));
        $gallery->category_id = $request->category_id;
        $gallery->all = $request->all;
        if ($request->hasFile('image')) {
            $file_path = public_path().'/upload/images/'.$gallery->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-gallery-'.$extension;
            $file->move('upload/images/', $filename);
            $gallery->image = $filename;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery Has Been Updated Successfully');
    }
    public function updateRole($id)
    {
        $gallery = Gallery::select('role')->where('id', $id)->first();
        if ($gallery->role == 0) {
            $role = 1;
        }elseif ($gallery->role == 1) {
            $role = 0;
        }
         Gallery::where('id', $id)->update(['role'=>$role]);
        return redirect()->route('gallery.index')->with('success', 'Gallery Status Has Been Active Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$gallery->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery Has Been Deleted Successfully');
    }
}
