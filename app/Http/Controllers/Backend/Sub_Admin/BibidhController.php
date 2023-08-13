<?php

namespace App\Http\Controllers\Backend\Sub_Admin;

use Auth;
use File;
use App\Models\Bibidh;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BibidhController extends Controller
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
            $bibidhs = Bibidh::orderBy('id', 'DESC')->get();
            return view('backend.sub_admin.bibidh.index', compact('bibidhs'));
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
            return view('backend.sub_admin.bibidh.create');
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
        $bibidh = new Bibidh;
        $bibidh->name = $request->name;
        $bibidh->des = $request->des;
        $bibidh->taka = $request->taka;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-bibidh-'.$extension;
            $file->move('upload/images/', $filename);
            $bibidh->image = $filename;
        }
        $bibidh->save();

        return redirect()->route('bibidh.index')->with('success', 'বাজারের বিবরণ গুলো বাজার লিস্টে জমা হয়েছে');
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
        $bibidh = Bibidh::findOrFail(intval($id));
        return view('backend.sub_admin.bibidh.edit', compact('bibidh'));
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:30720',
        ]);
        $bibidh = Bibidh::findOrFail(intval($id));
        $bibidh->name = $request->name;
        $bibidh->des = $request->des;
        $bibidh->taka = $request->taka;

        if ($request->hasFile('image')) {
            $file_path = public_path().'/upload/images/'.$bibidh->image;

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'-bibidh-'.$extension;
            $file->move('upload/images/', $filename);
            $bibidh->image = $filename;
        }
        $bibidh->save();

        return redirect()->route('bibidh.index')->with('success', 'বিবরণটি আপডেট সম্পূন্ন করা হয়েছে');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bibidh = Bibidh::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$bibidh->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $bibidh->delete();

        return redirect()->route('bibidh.index')->with('success', 'বিবরণটি সম্পূন্ন ভাবে মুছে ফেলা হয়েছে'); 
    }
}
