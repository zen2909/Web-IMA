<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriesArosbayaTable;

class SejarahArosbayaController extends Controller
{
    public function index()
    {
        $arosbaya = HistoriesArosbayaTable::first();
        // return view('sejarah_arosbaya/index', compact('history_arosbaya'));
        return view('s_arosbaya.index', compact('arosbaya'));
    }
    public function edit()
    {
        $history_arosbaya = HistoriesArosbayaTable::first();
        return view('admin.sejarah-arosbaya', compact('history_arosbaya'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $history_arosbaya = HistoriesArosbayaTable::first();

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('images/history-arosbaya', 'public');
            $history_arosbaya->image1 = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('images/history-arosbaya', 'public');
            $history_arosbaya->image2 = $image2;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3')->store('images/history-arosbaya', 'public');
            $history_arosbaya->image3 = $image3;
        }

        $history_arosbaya->text = $request->input('text');
        $history_arosbaya->save();

        return redirect()->back()->with('success', 'Content updated successfully');
    }
}