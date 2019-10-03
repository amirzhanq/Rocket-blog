@extends('layouts.app')
@section('title','Create Post')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1>Edit post</h1>

                <form action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf


                    <div class="form-group">
                        <label for="title">Title <span class="required">*</span></label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description <span class="required">*</span></label>
                        <textarea rows="3" class="form-control" name="description" >{{ $post->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Text<span class="required">*</span></label>
                        <textarea rows="7" class="form-control" name="text" >{{ $post->text }}</textarea>
                    </div>

                    <div class="form-group">
                        <p><span class="require">*</span> - Required fields</p>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Edit
                        </button>

                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
