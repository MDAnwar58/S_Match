<?php

namespace App\Http\Controllers\Backend\Admin;

use Str;
use File;
use Auth;
use App\Models\Latest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LatestController extends Controller
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
            $latest_reports = Latest::orderBy('id', 'DESC')->paginate(10);
            return view('backend.admin.latest_report.index', compact('latest_reports'));
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
            return view('backend.admin.latest_report.create');
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
        //generate slug
        $slug = $this->generateSlug($request->title);

        $validatedData = $request->validate([
            'title' => 'nullable|max:255',
            'content' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $latest_report = new Latest;
        $latest_report->admin_id = $request->admin_id;
        $latest_report->title = $request->title;
        $latest_report->slug = $slug;
        $latest_report->content = $request->content;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-latest_report-'.$extension;
            $file->move('upload/images/', $filename);
            $latest_report->image = $filename;
        }
        $latest_report->save();

        return redirect()->route('latest_report.index')->with('success', 'Added New Latest Report Successfully');
    }
    public function generateSlug($title)
    {
        $latest_report = Latest::where('title', $title)->get();
        if ($latest_report->count() > 0) {
            $count = $latest_report->count();
            $slug = Str::slug($title).'-'.$count;
        }else{
            $slug = Str::slug($title);
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
        $latest_report = Latest::findOrFail(intval($id));
        return view('backend.admin.latest_report.edit', compact('latest_report'));
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
            'title' => 'nullable|max:255',
            'content' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $latest_report = Latest::findOrFail(intval($id));
        // generate slug
        if ($latest_report->title != $request->title) {
            $slug = $this->generateSlug($request->title);
        }else{
            $slug = $latest_report->slug;
        }
        // update
        $latest_report->admin_id = $request->admin_id;
        $latest_report->title = $request->title;
        $latest_report->slug = $slug;
        $latest_report->content = $request->content;
        if ($request->hasFile('image')) {
            $file_path = public_path().'/upload/images/'.$latest_report->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-latest_report-'.$extension;
            $file->move('upload/images/', $filename);
            $latest_report->image = $filename;
        }
        $latest_report->save();

        return redirect()->route('latest_report.index')->with('success', 'Latest Report Has Been Updated Successfully');
    }
    public function reportRole($id)
    {
        $latest_report = Latest::select('role')->where('id', $id)->first();
        if ($latest_report->role == 0) {
            $role = 1;
        }elseif ($latest_report->role == 1) {
            $role = 0;
        }
         Latest::where('id', $id)->update(['role'=>$role]);

        return redirect()->route('latest_report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latest_report = Latest::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$latest_report->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $latest_report->delete();

        return redirect()->route('latest_report.index')->with('success', 'Latest Report Has Been Deleted Successfully');
    }
}
