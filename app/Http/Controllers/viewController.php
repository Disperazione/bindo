<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index(){
        return view('main');
    }

    public function blog()
    {
        return view('blog');
    }

    public function news($id){
        return view('news');
    }


}
