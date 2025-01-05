<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriesArosbayaTable;

class SejarahArosbayaController extends Controller
{
    public function index()
    {
        $arosbaya = HistoriesArosbayaTable::first();
        return view('s_arosbaya.index', compact('arosbaya'));
    }
}