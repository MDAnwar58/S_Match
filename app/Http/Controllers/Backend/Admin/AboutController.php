<?php

namespace App\Http\Controllers\Backend\Admin;

use File;
use Auth;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
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
        }else {
            $abouts = About::orderBy('id', 'DESC')->get();
            return view('backend.admin.about.index', compact('abouts'));
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
        }else {
            return view('backend.admin.about.create');
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
            'title' => 'required|max:255',
            'about_content' => 'required',
        ]);
        $about = new About;
        $about->title = $request->title;
        $about->about_content = $request->about_content;
        $about->save();

        return redirect()->route('about.index')->with('success', 'New About Content Is Added Successfully');
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
        }else {
            $about = About::findOrFail(intval($id));
            return view('backend.admin.about.edit', compact('about'));
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
        'title' => 'required|max:255',
        'about_content' => 'required',
    ]);
     $about = About::findOrFail(intval($id));
     $about->title = $request->title;
     $about->about_content = $request->about_content;
     $about->save();

     return redirect()->route('about.index')->with('success', 'About Content Has Been Updated Successfully');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       $about = About::findOrFail(intval($id));
       $about->delete();

       return redirect()->route('about.index')->with('success', 'About Content Has Been Deleted Successfully');
    }
}
