@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>All Students</h1>
        <a href="{{route('students.create')}}">Create New Students</a>
        <table class="table table-bordered table-striped mt-1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <a href="{{route('students.show',['student' => $student]) }}" class="btn btn-link text-success">Show</a>
                            <a href="{{route('students.edit',['student' => $student]) }}" class="btn btn-link">Edit</a>
                            <form action="{{route('students.destroy', ['student' => $student])}}" method="POST" class="d-inline" onsubmit="return confirm('really want to delete?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-link text-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $students->links()}}
    </div>
@endsection