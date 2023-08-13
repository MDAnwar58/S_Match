<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Month;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonthController extends Controller
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
    	$months = Month::orderBy('id', 'DESC')->paginate(5);
    	return view('backend.admin.month.index', compact('months'));
    }

    public function destroy($id)
    {
        $month = Month::findOrFail(intval($id));
        $month->delete();
        
        return redirect()->route('admin.month.index')->with('success', 'Month Has Been Delete Successfully');
    }
}
