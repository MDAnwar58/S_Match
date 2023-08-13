<?php

namespace App\Http\Controllers\Backend\Admin;

use Auth;
use File;
use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
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
            $sections = Section::orderBy('id', 'DESC')->get();
            return view('backend.admin.section.index', compact('sections'));
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
            return view('backend.admin.section.create');
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
            'price' => 'required|max:255',
            'stablist_charge' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $section = new Section;
        $section->title = $request->title;
        $section->price = $request->price;
        $section->stablist_charge = $request->stablist_charge;
        $section->content = $request->content;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-section-'.$extension;
            $file->move('upload/images/', $filename);
            $section->image = $filename;
        }
        $section->save();

        return redirect()->route('section.index')->with('success', 'Section Is Added Successfully');
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
            $section = Section::findOrFail(intval($id));
            return view('backend.admin.section.edit', compact('section'));
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
            'price' => 'required|max:255',
            'stablist_charge' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $section = Section::findOrFail(intval($id));
        $section->title = $request->title;
        $section->price = $request->price;
        $section->stablist_charge = $request->stablist_charge;
        $section->content = $request->content;
        if ($request->hasFile('image')) {
            $file_path = public_path().'/upload/images/'.$section->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-section-'.$extension;
            $file->move('upload/images/', $filename);
            $section->image = $filename;
        }
        $section->save();

        return redirect()->route('section.index')->with('success', 'Section Has been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$section->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $section->delete();

        return redirect()->route('section.index')->with('success', 'Section Has been Deleted Successfully');
    }
}
