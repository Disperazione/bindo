<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";

    public function comment()
    {
        return $this->hasMany(Comment::class,'id','post_id');
    }
}
