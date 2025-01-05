<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use Illuminate\Support\Facades\Storage;


class AdminDivisicontroller extends Controller
{

    public function index()
    {
        $divisions = Division::all();
        return view('admin.divisi.index', compact('divisions'));
    }

    public function add()
    {
        return view('admin.divisi.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'members' => 'nullable|string',
            'roles' => 'nullable|string',
            'work_programs' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $members = $request->members ? json_encode(array_map('trim', explode(',', $request->members))) : json_encode([]);
        $roles = $request->roles ? json_encode(array_map('trim', explode(',', $request->roles))) : json_encode([]);
        $work_programs = $request->work_programs ? json_encode(array_map('trim', explode(',', $request->work_programs))) : json_encode([]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/divisions', 'public');
        }

        Division::create([
            'name' => $request->name,
            'description' => $request->description,
            'members' => $members,
            'roles' => $roles,
            'work_programs' => $work_programs,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.divisi')->with('success', 'Divisi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $division = Division::findOrFail($id);
        return view('admin.divisi.edit', compact('division'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'members' => 'nullable|string',
            'roles' => 'nullable|string',
            'work_programs' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $division = Division::findOrFail($id);

        $members = $request->members ? json_encode(explode(',', $request->members)) : json_encode([]);
        $roles = $request->roles ? json_encode(explode(',', $request->roles)) : json_encode([]);
        $work_programs = $request->work_programs ? json_encode(explode(',', $request->work_programs)) : json_encode([]);

        if ($request->hasFile('image')) {

            if ($division->image) {
                Storage::disk('public')->delete($division->image);
            }

            $division->image = $request->file('image')->store('images/divisions', 'public');
        }


        $division->update([
            'name' => $request->name,
            'description' => $request->description,
            'members' => $members,
            'roles' => $roles,
            'work_programs' => $work_programs,
            'image' => $division->image,
        ]);

        return redirect()->route('admin.divisi')->with('success', 'Data divisi berhasil diperbarui!');
    }



    public function destroy(Division $division)
    {
        if ($division->image) {
            Storage::disk('public')->delete($division->image);
        }

        $division->delete();

        return redirect()->route('admin.divisi')->with('success', 'Divisi berhasil dihapus!');
    }
}