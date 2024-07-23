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
                        <td>{{$class -> title}}</td>
                        <td>{{$class -> teacher->name}}</td>
                        <td>{{$class->subject->title}}</td>
                        <td>
                            <a href="{{route('classrooms.show', ['classroom' => $class])}}" class="btn btn-link">Show</a>
                            <a href="{{route('classrooms.edit', ['classroom' => $class])}}" class="btn btn-link">Edit</a>
                            <form action="{{route('classrooms.destroy',['classroom'=>$class])}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-link">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$classrooms->links()}}
    </div>
@endsection