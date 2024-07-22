@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>All Classroom</h1>
        <a href="{{route('classrooms.create')}}">New Classroom</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Teacher Name</th>
                    <th>Subject</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $class)
                    <tr>
                        <td>{{$class -> id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection