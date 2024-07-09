@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>List Of All Teachers</h1>
        <a href="{{ route('teachers.create') }}">Create New Teacher</a>
        <table class="table table-bordered table-sm table-striped mt-1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher )
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->dob }}</td>
                        <td>
                            <a href="{{ route('teachers.show', ['teacher' => $teacher->id]) }}" class="btn btn-link text-success">Show</a>
                            <a href="{{ route('teachers.edit',['teacher' => $teacher])}}" class="btn btn-link">Edit</a>
                           <form action="{{ route('teachers.destroy',['teacher' => $teacher])}}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-link border-0 bg-transparent link-danger text-decoration-underline">
                           </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection