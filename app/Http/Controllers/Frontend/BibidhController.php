<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bibidh;
use Illuminate\Http\Request;

class BibidhController extends Controller
{
    public function index()
    {
        $bibidhs = Bibidh::orderBy('id', 'DESC')->paginate(10);
        return view('frontend.bibidh.index', compact('bibidhs'));
    }
}
