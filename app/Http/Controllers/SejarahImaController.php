<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriesImaTable;

class SejarahImaController extends Controller
{
    public function index()
    {
        $ima = HistoriesImaTable::first();
        return view('s_ima.index', compact('ima', ));
    }
}