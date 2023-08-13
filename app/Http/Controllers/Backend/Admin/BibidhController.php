<?php

namespace App\Http\Controllers\Backend\Admin;

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
        $this->middleware('admin');
    }

    public function index()
    {
    	$bibidhs = Bibidh::orderBy('id', 'DESC')->paginate(5);
    	return view('backend.admin.bibidh.index', compact('bibidhs'));
    }

    public function destroy($id)
    {
        $bibidh = Bibidh::findOrFail(intval($id));
        $file_path = public_path().'/upload/images/'.$bibidh->image;

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $bibidh->delete();

        return redirect()->route('admin.bibidh.index')->with('success', 'Bibidh Has Been Deleted Successfully');
    }
}
