<?php

namespace App\Http\Controllers\Backend\Sub_Admin;

use Auth;
use App\Models\Month;
use App\Models\User;
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
            $months = Month::orderBy('id', 'DESC')->get();
            return view('backend.sub_admin.month.index', compact('months'));
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
            $users = User::orderBy('id', 'DESC')->get();
            return view('backend.sub_admin.month.create', compact('users'));
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
            'name' => 'required|max:255|unique:months,name',
        ]);
        $month = new Month;
        $month->name = $request->name;
        $month->save();

        return redirect()->route('month.index')->with('success', 'সদস্যের নামটি লিস্টে জমা হয়েছ।');
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
        //
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
            'mile' => 'nullable|max:255',
            'milecherge' => 'nullable|max:255',
            'milekhoroce' => 'nullable|max:255',
            'bibidhkhroce' => 'nullable|max:255',
            'mot' => 'nullable|max:255',
            'joma' => 'nullable|max:255',
            'messdaba' => 'nullable|max:255',
            'messpaba' => 'nullable|max:255',
        ]);
        $month = Month::findOrFail(intval($id));
        $month->mile = $request->mile;
        $month->milecherge = $request->milecherge;
        $month->milekhoroce = $request->milekhoroce;
        $month->bibidhkhroce = $request->bibidhkhroce;
        $month->mot = $request->mot;
        $month->joma = $request->joma;
        $month->messdaba = $request->messdaba;
        $month->messpaba = $request->messpaba;
        $month->save();

        return redirect()->route('month.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $month = Month::findOrFail(intval($id));
        $month->delete();

        return redirect()->route('month.index')->with('success', 'বিবরণটি সম্পূন্ন ভাবে মুছে ফেলা হয়েছে');
    }
}
