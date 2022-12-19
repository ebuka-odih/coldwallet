<?php

namespace App\Http\Controllers;

use App\Fund;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $portfolio = Fund::all();
        return view('dashboard.portfolio', compact('portfolio'));

    }

    public function history()
    {
        $history = Fund::all();
        return view('dashboard.history', compact('history'));
    }

}
