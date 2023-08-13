<?php

namespace App\Http\Controllers\Backend\Admin;

use File;
use Auth;
use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
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
            $banners = Banner::orderBy('id', 'DESC')->get();
            return view('backend.admin.banner.index', compact('banners'));
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
         return view('backend.admin.banner.create');
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
            'banner_title' => 'required|max:255',
            'banner_sub_title' => 'required|max:255',
            'banner_content' => 'nullable',
            'banner_btn' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $banner = new Banner;
        $banner->banner_title = $request->banner_title;
        $banner->banner_sub_title = $request->banner_sub_title;
        $banner->banner_content = $request->banner_content;
        $banner->banner_btn = $request->banner_btn;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-banner-'.$extension;
            $file->move('upload/images/', $filename);
            $banner->image = $filename;
        }
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner Is Added Successfully');
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
            $banner = Banner::findOrFail(intval($id));
            return view('backend.admin.banner.edit', compact('banner'));
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
            'banner_title' => 'required|max:255',
            'banner_sub_title' => 'required|max:255',
            'banner_content' => 'nullable',
            'banner_btn' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $banner = Banner::findOrFail(intval($id));
        $banner->banner_title = $request->banner_title;
        $banner->banner_sub_title = $request->banner_sub_title;
        $banner->banner_content = $request->banner_content;
        $banner->banner_btn = $request->banner_btn;
        if ($request->hasFile('image')) {
            $file_path = public_path().'/upload/images/'.$banner->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-banner-'.$extension;
            $file->move('upload/images/', $filename);
            $banner->image = $filename;
        }
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$banner->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner Has Been Deleted Successfully');
    }
}
