<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Activity;
use App\Models\History;

class HomeController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        $activities = Activity::all();
        $histories = History::all();
        return view('homepage/index', compact('carousels', 'activities', 'histories'));
    }
}