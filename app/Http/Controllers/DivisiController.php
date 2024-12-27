<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Log\LogManager;


class DivisiController extends Controller
{
    public function index()
    {
        $divisis = Division::all();
        return view('divisi.index', compact('divisis'));
    }

    public function show($id)
    {
        $divisi = Division::findOrFail($id);
        return view('divisi.detail', compact('divisi'));
    }
}