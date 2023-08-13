<?php

namespace App\Http\Controllers\Backend\Admin;

use Auth;
use App\Models\Facility;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacilityController extends Controller
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
            $facilities = Facility::orderBy('id', 'DESC')->paginate(5);
            return view('backend.admin.facility.index', compact('facilities'));
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
            return view('backend.admin.facility.create');
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
            'icon' => 'required|max:255',
            'title' => 'required|max:255',
            'content' => 'nullable',
        ]);
        $facility = new Facility;
        $facility->icon = $request->icon;
        $facility->title = $request->title;
        $facility->content = $request->content;
        $facility->save();

        return redirect()->route('facility.index')->with('success', 'Facility Is Added Successfully');
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
            $facility = Facility::findOrFail(intval($id));
            return view('backend.admin.facility.edit', compact('facility'));
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
            'icon' => 'required|max:255',
            'title' => 'required|max:255',
            'content' => 'nullable',
        ]);
        $facility = Facility::findOrFail(intval($id));
        $facility->icon = $request->icon;
        $facility->title = $request->title;
        $facility->content = $request->content;
        $facility->save();

        return redirect()->route('facility.index')->with('success', 'Facility Has Been Updated Successfully');
    }

    public function facilityRole($id)
    {
        $facility = Facility::select('role')->where('id', $id)->first();
        if ($facility->role == 0) {
            $role = 1;
        }elseif ($facility->role == 1) {
            $role = 0;
        }
        Facility::where('id', $id)->update(['role'=>$role]);

        return redirect()->route('facility.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facility = Facility::findOrFail(intval($id));
        $facility->delete();

        return redirect()->route('facility.index')->with('success', 'Facility Has Been Deleted Successfully');
    }
}
