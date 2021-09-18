<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index(){
        return view('layout.master');
    }



    public function news(){
        return view('layout.news');
    }

    public function blog(){
        return view('layout.blog');
    }
}
