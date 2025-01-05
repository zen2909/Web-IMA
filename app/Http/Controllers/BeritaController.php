<?php

// app/Http/Controllers/BeritaController.php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('blog.index', compact('berita'));
    }

    public function detail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('blog.detail', compact('berita'));
    }

}