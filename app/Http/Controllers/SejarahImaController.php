<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriesImaTable;

class SejarahImaController extends Controller
{
    public function index()
    {
        $ima = HistoriesImaTable::first();
        // return view('sejarah_IMA/index', compact('history_ima', ));
        return view('s_ima.index', compact('ima', ));
    }

    public function edit()
    {
        $history_ima = HistoriesImaTable::first();
        return view('admin.sejarah-ima', compact('history_ima'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $history_ima = HistoriesImaTable::first();

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('images/history-ima', 'public');
            $history_ima->image1 = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('images/history-ima', 'public');
            $history_ima->image2 = $image2;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3')->store('images/history-ima', 'public');
            $history_ima->image3 = $image3;
        }

        $history_ima->text = $request->input('text');
        $history_ima->save();

        return redirect()->back()->with('success', 'Content updated successfully');
    }
}