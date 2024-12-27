<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinbaController extends Controller
{
    public function index(){
        return view('minba/index');
    }
}
