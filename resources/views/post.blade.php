@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Write your creation</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="postbox" placeholder="write something awesome!!"></textarea>
                    <span style="color:red;text:bold;">@error('postbox'){{$message}}@enderror</span>
                </div>
                <button class="btn btn-primary" type="submit">Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
