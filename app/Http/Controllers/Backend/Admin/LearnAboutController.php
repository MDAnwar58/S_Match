<?php

namespace App\Http\Controllers\Backend\Admin;

use Auth;
use App\Models\LearnAbout;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnAboutController extends Controller
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
            $learn_abouts = LearnAbout::orderBy('id', 'DESC')->paginate(5);
            return view('backend.admin.learn_about.index', compact('learn_abouts'));
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
            return view('backend.admin.learn_about.create');
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
            'header' => 'required|max:255',
            'title' => 'required|max:255',
            'content' => 'nullable',
            'quality1' => 'required|max:255',
            'quality2' => 'required|max:255',
            'quality3' => 'nullable|max:255',
        ]);
        $learn_about = new LearnAbout;
        $learn_about->header = $request->header;
        $learn_about->title = $request->title;
        $learn_about->content = $request->content;
        $learn_about->quality1 = $request->quality1;
        $learn_about->quality2 = $request->quality2;
        $learn_about->quality3 = $request->quality3;
        $learn_about->save();

        return redirect()->route('learn_about.index')->with('success', 'Learn About Is Added Successfully');
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
            $learn_about = LearnAbout::findOrFail(intval($id));
            return view('backend.admin.learn_about.edit', compact('learn_about'));
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
            'header' => 'required|max:255',
            'title' => 'required|max:255',
            'content' => 'nullable',
            'quality1' => 'nullable|max:255',
            'quality2' => 'nullable|max:255',
            'quality3' => 'nullable|max:255',
            'quality4' => 'nullable|max:255',
            'quality5' => 'nullable|max:255',
            'quality6' => 'nullable|max:255',
            'quality7' => 'nullable|max:255',
        ]);
        $learn_about = LearnAbout::findOrFail(intval($id));
        $learn_about->header = $request->header;
        $learn_about->title = $request->title;
        $learn_about->content = $request->content;
        $learn_about->quality1 = $request->quality1;
        $learn_about->quality2 = $request->quality2;
        $learn_about->quality3 = $request->quality3;
        $learn_about->quality4 = $request->quality4;
        $learn_about->quality5 = $request->quality5;
        $learn_about->quality6 = $request->quality6;
        $learn_about->quality7 = $request->quality7;
        $learn_about->save();

        return redirect()->route('learn_about.index')->with('success', 'Learn About Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $learn_about = LearnAbout::findOrFail(intval($id));
        $learn_about->delete();

        return redirect()->route('learn_about.index')->with('success', 'Learn About Has Been Deleted Successfully');
    }
}
