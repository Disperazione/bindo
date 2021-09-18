<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class viewController extends Controller
{
    public function index(){
        return view('main');
    }

    public function blog()
    {
        $post = Post::all();
        return view('blog',compact('post'));
    }

    public function news($id){
        $post = Post::where('id',$id)->first();
        return view('news', compact('post'));
    }


}
