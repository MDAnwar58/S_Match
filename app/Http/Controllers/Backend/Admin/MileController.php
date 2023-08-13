<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Mile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MileController extends Controller
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
    	$miles = Mile::orderBy('id', 'DESC')->get();
    	return view('backend.admin.mile.index', compact('miles'));
    }

    public function destroy($id)
    {
        $mile = Mile::findOrFail(intval($id));
        $mile->delete();

        return redirect()->route('admin.mile.index')->with('success', 'Mile Has Been Cleared Successfully');
    }
}
