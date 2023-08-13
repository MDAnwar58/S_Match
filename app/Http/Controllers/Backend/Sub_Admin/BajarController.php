<?php

namespace App\Http\Controllers\Backend\Sub_Admin;

use Auth;
use File;
use App\Models\User;
use App\Models\Bajar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BajarController extends Controller
{
    /**
         * Create a new controller instance.
         *
         * @return void
         */
     public function __construct()
     {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 1) {
            $bajars = Bajar::orderBy('id', 'DESC')->paginate(10);
            return view('backend.sub_admin.bajar.index', compact('bajars'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 1) {
            return view('backend.sub_admin.bajar.create');
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
            'name' => 'required|max:255',
            'des' => 'required|max:255',
            'taka' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:30720',
        ]);
        $bajar = new Bajar;
        $bajar->name = $request->name;
        $bajar->des = $request->des;
        $bajar->taka = $request->taka;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-bajar-'.$extension;
            $file->move('upload/images/', $filename);
            $bajar->image = $filename;
        }
        $bajar->save();

        return redirect()->route('bajar.index')->with('success', 'বাজারের বিবরণ গুলো বাজার লিস্টে জমা হয়েছে');
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
        $bajar = Bajar::findOrFail(intval($id));
        return view('backend.sub_admin.bajar.edit', compact('bajar'));
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
            'name' => 'required|max:255',
            'des' => 'required|max:255',
            'taka' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:30720',
        ]);
        $bajar = Bajar::findOrFail(intval($id));
        $bajar->name = $request->name;
        $bajar->des = $request->des;
        $bajar->taka = $request->taka;

        if ($request->hasFile('image')) {
            $file_path = public_path().'/upload/images/'.$bajar->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-bajar-'.$extension;
            $file->move('upload/images/', $filename);
            $bajar->image = $filename;
        }
        $bajar->save();

        return redirect()->route('bajar.index')->with('success', 'বাজারের বিবরণ গুলো
            আপডেট সম্পূন্ন করা হয়েছে');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bajar = Bajar::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$bajar->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $bajar->delete();

        return redirect()->route('bajar.index')->with('success', 'বাজারের বিবরণটি মুছে ফেলা হয়েছে');
    }
}
