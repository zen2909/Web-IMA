<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeilmuanController extends Controller
{
    public function index(){
        return view('keilmuan/index');
    }
}
