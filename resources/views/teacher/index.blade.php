@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>List of all teachers</h1>
        <a href="{{ route('teachers.create') }}">Create</a>
        <table class="table table-bordered table-sm table-striped">
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
                            <a href="{{ route('teachers.show', ['teacher' => $teacher->id]) }}">Show</a>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection