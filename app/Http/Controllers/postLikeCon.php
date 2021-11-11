<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postLikeCon extends Controller
{
    public function store(Post $post,Request $req){
        $post->likes()->create([
            'user_id'=>$req->user()->id,
        ]);
        return back();
    }
}
