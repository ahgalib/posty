@extends('layouts.app')

@section('content')
<div class="container p-4" style="background-color:greenyellow;margin-top:-25px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/writepost" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Write your creation</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="postbox" placeholder="write something awesome!!"></textarea>
                    <span style="color:red;text:bold;">@error('postbox'){{$message}}@enderror</span>
                </div>
                <button class="btn btn-primary mb-3" type="submit">Post</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($info->count())
                @foreach($info as $post)
                <div class="">
                    <a href=""style="text-decoration:none;font-weight:bold;">{{$post->user->name}}</a>
                    <span style="font-size:14px;">{{$post->created_at->diffForHumans()}}</span>
                    <p style="font-weight:bold;">{{$post['body']}}</p>
                </div>
                <div class="d-flex mb-5">

                    <form action="/post/{{$post->id}}" method="post">
                    @if(!$post->likedBy(auth()->user()))
                        @csrf
                        <button class="btn btn-success btn-sm">like</button>
                    </form>
                    @else
                    <form action="" method="post">
                        @csrf
                        <button class="btn btn-danger btn-sm">Unlike</button>
                    </form>
                    @endif
                    {{$post->likes->count()}}Like
                </div>
                @endforeach
            @else
                <h4>No post here</h4>
            @endif
        </div>
    </div>
    <div class=" row justify-content-center">
        <div class="col-md-8">
            {{$info->links()}}
        </div>
    </div>
    <style>
        .w-5{
            display:none;
        }
    </style>

</div>
@endsection
