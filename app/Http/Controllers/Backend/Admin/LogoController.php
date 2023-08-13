<?php

namespace App\Http\Controllers\Backend\Admin;

use File;
use App\Models\Logo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoController extends Controller
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
        $logos = Logo::orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.logo.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.logo.create');
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
            'text_logo' => 'nullable|max:255',
            'file_logo' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $logo = new Logo;
        $logo->text_logo = $request->text_logo;
        if ($request->hasFile('file_logo')) {
            $file = $request->file('file_logo');
            $extension = $file->getClientOriginalName();
            $filename = time().'-logo-'.$extension;
            $file->move('upload/images/', $filename);
            $logo->file_logo = $filename;
        }
        $logo->save();

        return redirect()->route('logo.index')->with('success', 'Logo Is Added Successfully');
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
        $logo = Logo::findOrFail(intval($id));
        return view('backend.admin.logo.edit', compact('logo'));
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
            'text_logo' => 'nullable|max:255',
            'file_logo' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $logo = Logo::findOrFail(intval($id));
        $logo->text_logo = $request->text_logo;
        if ($request->hasFile('file_logo')) {
            $file_path = public_path().'/upload/images/'.$logo->file_logo;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('file_logo');
            $extension = $file->getClientOriginalName();
            $filename = time().'-logo-'.$extension;
            $file->move('upload/images/', $filename);
            $logo->file_logo = $filename;
        }
        $logo->save();

        return redirect()->route('logo.index')->with('success', 'Logo Has Been Updated Successfully');
    }

    public function updateRole($id)
    {
        $logo = Logo::select('role')->where('id', $id)->first();
        if ($logo->role == 0) {
            $role = 1;
        }elseif ($logo->role == 1) {
            $role = 0;
        }
        Logo::where('id', $id)->update(['role'=>$role]);

        return redirect()->route('logo.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo = Logo::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$logo->file_logo;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $logo->delete();

        return redirect()->route('logo.index')->with('success', 'Logo Has Been Deleted Successfully');
    }
}
