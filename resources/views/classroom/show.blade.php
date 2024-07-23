@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Detail of Classroom</h1>
        <div>
            <label for="title">Title:</label>
            <strong>{{$classroom->title}}</strong>
        </div>
        <div>
            <label for="detail">Detail:</label>
            <strong>{{$classroom->detail}}</strong>
        </div>
        <div>
            <label for="subject_id">Subject:</label>
            <strong>{{$classroom->subject->title}}</strong>
        </div>
        <div>
            <label for="teacher_id">Teacher:</label>
            <strong>{{$classroom->teacher->name}}</strong>
        </div>
        <div>
            <h5 class="text-decoration-underline">Registered Students - {{ $classroom->students->count()}}</h5>
            <table class="table table-border table-sm table-stripped">
                <thead>
                    <tr>
                        <th>Student_ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classroom->students as $student)
                        <tr>
                            <td>{{ $student->id}}</td>
                            <td><a href="{{ route('students.show',['student' => $student]) }}">{{ $student->name}}</a></td>
                            <td>{{ $student->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection