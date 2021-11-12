<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class postLikeCon extends Controller
{
    public function store(Post $post,Request $req){
        
        $post->likes()->create([
            'user_id'=>$req->user()->id,
        ]);
        return back();
    }
    public function destroy(Post $post,Request $req){
        $req->user()->likes()->where('post_id',$post->id)->delete();
        return back();
    }
}
