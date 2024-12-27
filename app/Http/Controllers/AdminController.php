<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Metode untuk halaman admin
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.index', compact('beritas'));
    }


    // Metode untuk menambah berita baru
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'required',
        ]);

        // Proses penyimpanan data
        $imagePath = $request->file('foto')->store('images', 'public');

        Berita::create([
            'judul' => $request->judul,
            'foto' => $imagePath,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.index')->with('success', 'Berita berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'required',
        ]);

        $berita = Berita::findOrFail($id);

        // Proses update data
        $berita->judul = $request->judul;
        $berita->body = $request->body;

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('images', 'public');
            $berita->foto = $imagePath;
        }

        $berita->save();

        return redirect()->route('admin.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('admin.index')->with('success', 'Berita berhasil dihapus.');
    }
}