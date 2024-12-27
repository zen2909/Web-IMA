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
        return view('admin.divisions.index', compact('divisions'));
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

        return redirect()->back()->with('success', 'Divisi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $division = Division::findOrFail($id); // Cari divisi berdasarkan ID
        return view('admin.divisions.edit', compact('division')); // Kirim data ke view
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

        $division = Division::findOrFail($id); // Cari divisi berdasarkan ID

        $members = $request->members ? json_encode(explode(',', $request->members)) : json_encode([]);
        $roles = $request->roles ? json_encode(explode(',', $request->roles)) : json_encode([]);
        $work_programs = $request->work_programs ? json_encode(explode(',', $request->work_programs)) : json_encode([]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($division->image) {
                Storage::disk('public')->delete($division->image);
            }
            // Simpan gambar baru
            $division->image = $request->file('image')->store('images/divisions', 'public');
        }

        // Perbarui data
        $division->update([
            'name' => $request->name,
            'description' => $request->description,
            'members' => $members,
            'roles' => $roles,
            'work_programs' => $work_programs,
            'image' => $division->image,
        ]);

        return redirect()->route('admin.divisions.index')->with('success', 'Data divisi berhasil diperbarui!');
    }



    public function destroy(Division $division)
    {
        if ($division->image) {
            Storage::disk('public')->delete($division->image);
        }

        $division->delete();

        return redirect()->route('admin.divisions.index')->with('success', 'Divisi berhasil dihapus!');
    }
}