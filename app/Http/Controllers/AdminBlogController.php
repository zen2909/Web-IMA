<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blog = Berita::all();
        return view('admin.blog.index', compact('blog'));
    }

    public function add()
    {
        return view('admin.blog.add');
    }

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

        return redirect()->route('admin.blog')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $blog = Berita::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'required',
        ]);

        $berita = Berita::findOrFail($id);

        $berita->judul = $request->judul;
        $berita->body = $request->body;

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('images', 'public');
            $berita->foto = $imagePath;
        }

        $berita->save();

        return redirect()->route('admin.blog')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $blog = Berita::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blog')->with('success', 'Berita berhasil dihapus.');
    }
}