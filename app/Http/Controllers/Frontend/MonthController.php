<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Month;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function index()
    {
        $months = Month::orderBy('id', 'DESC')->paginate(10);
        return view('frontend.month.index', compact('months'));
    }
}
