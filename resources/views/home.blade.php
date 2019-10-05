@extends('layouts.app')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@section('content')
<div class="container">

                        <div class="container mt-3">
                            <h2>List of Posts</h2>
                            <p>Type something in the input field to search the table for title or date.</p>
                            <input class="form-control" id="myInput" type="text" placeholder="Search..">
                            <br>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Date of creation</th>
                                <th></th>


                            </tr>
                            </thead>
                        @foreach($posts as $post)
                                <tbody id="myTable">
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ url('/post/show', $post->id) }}"><button class="btn btn-info">Read</button></a>
                                        <a href="{{ url('/post/edit', $post->id) }}"><button class="btn btn-dark">Edit</button></a>

                                        <form method="post" action="{{ route('post.delete', $post->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                        @endforeach
                        </table>
                        {{ $posts->links() }}
                </div>

                <script>
                    $(document).ready(function(){
                        $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                    });
                </script>


                </div>

@endsection
