<?php

namespace App\Http\Controllers\Backend\Admin;

use File;
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
        $this->middleware('admin');
    }

    public function index()
    {
    	$bajars = Bajar::orderBy('id', 'DESC')->paginate(5);
    	return view('backend.admin.bajar.index', compact('bajars'));
    }

    public function destroy($id)
    {
        $bajar = Bajar::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$bajar->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $bajar->delete();

        return redirect()->route('admin.bajar.index')->with('success', 'Bajar Has Been Deleted Successfully');
    }
}
