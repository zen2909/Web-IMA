<?php

// app/Http/Controllers/BeritaController.php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Metode untuk halaman berita publik
    public function index()
    {
        $berita = Berita::latest()->get(); // Mengambil semua berita terbaru
        return view('blog.index', compact('berita'));
    }

    public function detail($id)
    {
        $berita = Berita::findOrFail($id); // Mengambil berita berdasarkan ID atau gagal jika tidak ditemukan
        return view('blog.detail', compact('berita'));
    }

}