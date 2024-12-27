<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;

class StrukturController extends Controller
{
    public function index()
    {
        $Structures = Structure::all();
        return view('struktur/index', compact('Structures'));
    }

    public function edit()
    {
        $Structures = Structure::all();
        return view('admin.structure', compact('Structures'));
    }

    public function updateStructure(Request $request)
    {
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'titles.*' => 'required|string',
        ]);

        $Structures = $request->input('activity_ids', []);

        foreach ($Structures as $index => $StructureId) {
            $Structure = Structure::find($StructureId);

            if (!$Structure) {
                continue;
            }

            if ($request->hasFile('images.' . $index)) {
                $file = $request->file('images.' . $index);
                $imagePath = $file->store('images/Structures', 'public');
                $Structure->image = $imagePath;
            }

            $Structure->title = $request->input('titles.' . $index);
            $Structure->save();
        }

        return redirect()->back()->with('success', 'Structures updated successfully.');
    }
}