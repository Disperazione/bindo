<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CommentController extends Controller
{
    public function add_comment(CommentRequest $request, $id){
    $request->validated();
    Comment::create([
        "id" => Str::uuid(),
        "post_id" => $id,
        "name" => $request->name,
        "email" => $request->email,
        "comment" => $request->comment
    ]);
    alert()->success('Berhasil', 'data berhasil di tambahkan'); // swwet alert laravel
    return back();
    }
}
