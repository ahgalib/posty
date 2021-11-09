@extends('layouts.app')

@section('content')
<div class="container">
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
                <div class="mb-4 mt-2">
                    <a href=""style="text-decoration:none;font-weight:bold;">{{$post->user->name}}</a>
                    <span style="font-size:14px;">{{$post->created_at->diffForHumans()}}</span>
                    <p>{{$post['body']}}</p>
                </div>
                @endforeach
            @else
                <h4>No post here</h4>
            @endif
        </div>
    </div>

</div>
@endsection
