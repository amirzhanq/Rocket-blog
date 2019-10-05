@extends('layouts.app')

@section('title', 'Author Posts')

<style>

    .img {
        height: 270px;
        width: 350px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@section('content')
    @foreach($posts as $post)
        <div class="container">

            <section>
                <div class="container py-3">
                    <div class="card">
                        <div class="row ">
                            <div class="col-md-4">
                                <img src="{{ asset('/images/fake.jpg') }}" class="img">
                            </div>
                            <div class="col-md-8 px-3">
                                <div class="card-block px-3">
                                    <h4 class="card-title">{{ $post->title }}</h4>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href="{{url('/post/show', $post->id)}}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endforeach
@endsection
