<?php

namespace App\Http\Controllers;

use App\Coins;
use App\Fund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FundController extends Controller
{
    public function wallet()
    {
        return view('dashboard.wallet');
    }
    public function onChain()
    {
        $wallets = Coins::all();
        return view('dashboard.on-chain', compact('wallets'));
    }
    public function processOnchain(Request $request)
    {
      $fund = new Fund();
      $fund->coin_id = $request->coin_id;
      $fund->user_id = Auth::id();
      $fund->save();
      return redirect()->route('user.pay', $fund->id);
    }

    public function pay($id)
    {
        $fund = Fund::findOrFail($id);
        return view('dashboard.pay', compact('fund'));
    }

//    public function proceed(Request $request)
//    {
//        $fund = new Fund();
//        $fund->coin_id = $request->coin_id;
//        $fund->user_id = Auth::id();
//        $fund->save();
//        return redirect()->route('user.waiting', $fund->id);
//    }

    public function waiting($id)
    {
        $fund = Fund::findOrFail($id);
        return view('dashboard.waiting', compact('fund'));
    }
}
