<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Money;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function index()
    {
        $moneies = Money::orderBy('id', 'DESC')->paginate(10);
        return view('frontend.money.index', compact('moneies'));
    }
}
