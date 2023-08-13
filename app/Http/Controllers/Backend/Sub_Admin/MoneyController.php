<?php

namespace App\Http\Controllers\Backend\Sub_Admin;

use Auth;
use Carbon;
use App\Models\Money;
use App\Models\User;
use App\Models\Admin;
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
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }elseif (Auth::user()->role == 1) {
            $moneies = Money::orderBy('id', 'DESC')->paginate(5);
            return view('backend.sub_admin.money.index', compact('moneies'));
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
            return view('backend.sub_admin.money.create', compact('users'));
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
            'name' => 'required|max:255|unique:money,name',
            'money' => 'required|max:255',
        ]);
        $money = new Money;
        $money->name = $request->name;
        $money->money = $request->money;
        $money->save();

        return redirect()->route('money.index')->with('success', 'সদস্যের নামটি লিস্টে জমা হয়েছ।');
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
        if (Auth::user()->role == 1) {
            $money = Money::findOrFail(intval($id));
            return view('backend.sub_admin.money.edit', compact('money'));
        }
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
        $money = Money::findOrFail(intval($id));
        $money->name = $request->name;
        $money->money = $request->money;
        $money->money1 = $request->money1;
        $money->date1 = date('Y-m-d h:i:s', strtotime($request->date1));
        $money->money2 = $request->money2;
        $money->date2 = $request->date2;
        $money->money3 = $request->money3;
        $money->date3 = $request->date3;
        $money->money4 = $request->money4;
        $money->date4 = $request->date4;
        $money->money5 = $request->money5;
        $money->date5 = $request->date5;
        $money->money6 = $request->money6;
        $money->date6 = $request->date6;
        $money->money7 = $request->money7;
        $money->date7 = $request->date7;
        $money->money8 = $request->money8;
        $money->date8 = $request->date8;
        $money->money9 = $request->money9;
        $money->date9 = $request->date9;
        $money->money10 = $request->money10;
        $money->date10 = $request->date10;
        $money->money11= $request->money11;
        $money->date11= $request->date11;
        $money->money12 = $request->money12;
        $money->date12 = $request->date12;
        $money->money13 = $request->money13;
        $money->date13 = $request->date13;
        $money->money14 = $request->money14;
        $money->date14 = $request->date14;
        $money->save();

        return redirect()->route('money.index')->with('success', 'টাকা লিস্টে জমা হয়েছ।');
    }

    public function moneyAdd($id)
    {
        $money = Money::findOrFail(intval($id));
        return view('backend.sub_admin.money.moneyAdd', compact('money'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $money = Money::findOrFail(intval($id));
        $money->delete();

        return redirect()->route('money.index')->with('success', 'Money Has Been Updated Successfully');
    }
}
