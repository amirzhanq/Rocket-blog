@extends('layouts.app')

@section('title', 'Welcome')
<style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    .img {
        height: 200px;
        width: 500px;
    }



</style>

@section('content')



    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <div class="fakeimg">Fake Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                <h3>Some Links</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>

            <div class="col-sm-8">
                @foreach($posts as $post)
                    <h2><a href="{{ url('/post/show', $post->id) }}" >{{ $post->title }}</a></h2>
                        <h5>Added by {{ $post->user->name }}, {{ $post->created_at }}</h5>
                        <div><img src="{{ asset('/images/fake.jpg') }}" alt="Fake Image" class="img"></div>
                        <p>Some text..</p>
                        <p>{{ $post->description }}</p>
                        <br>
                @endforeach
                </div>

        </div>
    </div>

{{--    <div class="starter-template">--}}
{{--        <h1>Welcome to Rocket Blog</h1>--}}
{{--        <p class="lead">You can choose what you are interested.<br> You may check your posts.</p>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8 col-md-10 mx-auto">--}}
{{--                @foreach( $posts as $post)--}}
{{--                    <div class="post-preview">--}}
{{--                        <a href="{{ url('/post', $post->id) }}">--}}
{{--                            <h2 class="post-title">--}}
{{--                                {{ $post->title }}--}}
{{--                            </h2>--}}
{{--                            <h3 class="post-subtitle">--}}
{{--                                {{ $post->description }}--}}
{{--                            </h3>--}}
{{--                        </a>--}}
{{--                        <p class="post-meta">Added by--}}
{{--                            <a href="#">{{ $post->user->name }}</a>--}}
{{--                            {{  \Carbon\Carbon::parse($post->created_at)->format('d.m.Y ') }}</p>--}}
{{--                    </div>--}}
{{--                    <hr>--}}
{{--                @endforeach--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



@endsection
