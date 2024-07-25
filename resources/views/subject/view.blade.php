@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Detail of <em class="text-decoration-underline">{{ $subject->title}}</em> </h2>
        <p>{{ $subject->detail}}</p>
        <ul>
            @foreach ($subject->classrooms as $class)
                <li>
                    <a href="{{ route('classrooms.show',['classroom'=>$class]) }}">{{ $class->title }}</a>
                    <span>by</span>
                    <a href="{{ route('teachers.show',['teacher'=>$class->teacher]) }}">{{ $class->teacher->name}}</a>
                </li>
            @endforeach
        </ul>
        <a href="{{ url()-> previous() }}" class="btn btn-outline-secondary mt-2">Back</a>

    </div>
@endsection