<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Bajar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BajarController extends Controller
{
        public function index()
        {
            $bajars = Bajar::orderBy('id', 'DESC')->paginate(10);
            return view('frontend.bajar.index', compact('bajars'));
        }

        
        public function create()
        {
            return view('frontend.bajar.create');
        }

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
    
            return redirect()->route('frontend.bajar')->with('success', 'বাজারের বিবরণ গুলো বাজার লিস্টে জমা হয়েছে');
        }
}
