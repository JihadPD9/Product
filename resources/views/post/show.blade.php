@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Show Data Post</div></center>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $posts->title }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Content</label>
                            <input type="text" class="form-control" name="content" value="{{ $posts->content }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label for="">Foto</label>
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('/images/post/' . $posts->cover) }}" width="100" alt="">
                        </div>
                        <a href="{{ route('post.index') }}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
