<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpdController extends Controller
{
    public function index(){
        return view('ppd/index');
    }
}
