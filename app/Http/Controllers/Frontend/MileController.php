<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Mile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MileController extends Controller
{
    public function index()
    {
        $miles = Mile::orderBy('id', 'DESC')->get();
        return view('frontend.mile.index', compact('miles'));
    }
}
