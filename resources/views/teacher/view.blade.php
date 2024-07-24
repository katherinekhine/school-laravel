@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{ $teacher->name }}</h2>
        <label for="dob" class="fst-italic">Date Of Birth:</label>
        <p class="fw-bold">{{ $teacher->dob }}</p>
        <label for="email" class="fst-italic">Email:</label>
        <p class="fw-bold">{{ $teacher->email }}</p>
        <label for="address" class="fst-italic">Address</label>
       <address class="fw-bold">{{ $teacher->address}}</address>
        <div class="mt-3">
            <h2>Classrooms</h2>
            <table class="table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Classroom ID</th>
                        <th>Classrom Title</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teacher->classrooms as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td><a href="{{ route('classrooms.show',['classroom'=> $class])}}">{{ $class->title}}</a></td>
                            <td><a href="{{route('subjects.show',['subject'=> $class->subject])}}">{{$class->subject->title}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       <a href="{{ url()-> previous() }}">&lt;&lt;Back</a>
    </div>
@endsection