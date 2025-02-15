<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Activity;
use App\Models\History;
use App\Models\Structure;

class DashboardController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        $activities = Activity::all();
        $histories = History::all();
        $struktur = Structure::first();


        $ima = $histories->where('id', 1)->first();
        $arosbaya = $histories->where('id', 2)->first();
        return view('dashboard.index', compact('carousels', 'activities', 'histories', 'ima', 'arosbaya', 'struktur'));
    }
}