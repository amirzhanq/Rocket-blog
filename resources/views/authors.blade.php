@extends('layouts.app')

@section('title', 'Authors')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@section('content')
    <div class="container">

        <div class="container mt-3">
            <h2>List of Authors</h2>
            <p>Type something in the input field to search the table for Name or asd.</p>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>№</th>
                    <th>name</th>
                    <th>full name</th>

                    <th></th>


                </tr>
                </thead>
                @foreach($users as $user)
                    <tbody id="myTable">
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td> <a href="{{ url('/author', $user->id) }}"><button class="btn btn-dark">Choose</button></a> </td>


                    </tr>
                    </tbody>
                @endforeach
            </table>

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
