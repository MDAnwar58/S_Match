<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Money;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoneyController extends Controller
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
    	$moneies = Money::orderBy('id', 'DESC')->paginate(10);
    	return view('backend.admin.money.index', compact('moneies'));
    }

    public function destroy($id)
    {
        $money = Money::findOrFail(intval($id));
        $money->delete();

        return redirect()->route('admin.money.index')->with('success', 'Money Has Been Deleted Successfully');
    }
}
