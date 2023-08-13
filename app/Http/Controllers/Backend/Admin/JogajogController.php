<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Jogajog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JogajogController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogajogs = Jogajog::orderBy('created_at', 'DESC')->paginate(5);
        return view('backend.admin.jogajog.index', compact('jogajogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required|max:255',
            'content' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'nullable|max:255',
        ]);
        $jogajog = new Jogajog;
        $jogajog->title = $request->title;
        $jogajog->content = $request->content;
        $jogajog->email = $request->email;
        $jogajog->phone = $request->phone;
        $jogajog->address = $request->address;
        $jogajog->save();

        return redirect()->route('jogajog.index')->with('success', 'Jogajog Is Added Successfully');
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
        $jogajog = Jogajog::findOrFail(intval($id));
        return view('backend.admin.jogajog.edit', compact('jogajog'));
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
            'title' => 'required|max:255',
            'content' => 'required',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'nullable|max:255',
        ]);
        $jogajog = Jogajog::findOrFail(intval($id));
        $jogajog->title = $request->title;
        $jogajog->content = $request->content;
        $jogajog->email = $request->email;
        $jogajog->phone = $request->phone;
        $jogajog->address = $request->address;
        $jogajog->save();

        return redirect()->route('jogajog.index')->with('success', 'Jogajog Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jogajog = Jogajog::findOrFail(intval($id));
        $jogajog->delete();

        return redirect()->route('jogajog.index')->with('success', 'Jogajog Has Been Updated Successfully');
    }
}
