<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = [
            'pageName' => 'Homepage',
            'pageTitle' => 'Test'
        ];

        return view('home', $data);
    }

    public function movies(){
        return view('movies');
    }
}
