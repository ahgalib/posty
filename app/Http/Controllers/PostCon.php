<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCon extends Controller
{
    public function __construct(){
        return $this->middleware(['auth']);
    }
    public function index()
    {   
        $data = Post::orderBy('created_at','DESC')->paginate(3);
        return view('post',['info'=>$data]);
    }
    public function post(Request $req){
         $req->validate([
             'postbox'=>'required',
         ]);
         $req->user()->posts()->create([
             'body'=>$req->postbox,
         ]);
         return back();

    }
}
