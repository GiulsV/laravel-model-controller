<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies =\App\Movie::all();
        return view('home', compact('movies'));
    }
}
