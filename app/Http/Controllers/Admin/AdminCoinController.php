<?php

namespace App\Http\Controllers\Admin;

use App\Coins;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCoinController extends Controller
{
    public function index()
    {
        $coins = Coins::all();
        return view('admin.coins', compact('coins'));
    }

    public function create()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        if ($request->hasFile('icon')){
            $image = $request->file('icon');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $news = new Coins();
            $news->name = $request->name;
            $news->address = $request->address;
            $news->icon = $input['imagename'];
            $news->save();
            return redirect()->route('admin.coins.index');
        }

        $news = new Coins();
        $news->name = $request->name;
        $news->address = $request->address;
        $news->save();
        return redirect()->route('admin.coins.index');
    }

    public function edit($id)
    {
        $coin = Coins::findOrFail($id);
        return view('admin.edit-wallet', compact('coin'));
    }

}
