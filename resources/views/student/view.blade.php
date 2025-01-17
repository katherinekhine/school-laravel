@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="mb-5 text-secondary">Profile Of <em class="text-dark font-bold">{{$student->name}}</em></h3>
        <div>
            <img src="{{asset('storage/'.$student->photo)}}" alt="" height="150px">
        </div>
        <div>
            <label for="">Name:</label>
            <strong>{{$student->name}}</strong>
        </div>
        <div>
            <label for="">Email:</label>
            <strong>{{$student->email}}</strong>
        </div>
        <div>
            <label for="">Date Of Birth:</label>
            <strong>{{$student->dob}}</strong>
        </div>
        <div>
            <label for="">Address:</label>
            <strong>{{$student->address}}</strong>
        </div>
        <div>
            <h3 class="text-decoration-underlilne">Enrolled Classes</h3>
            <ul>
                @foreach ($student->classrooms as $class)
                    <li>
                        <a href="{{ route('classrooms.show',['classroom'=>$class]) }}">{{$class->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <a href="{{ url()-> previous() }}" class="btn btn-outline-secondary mt-2">Back</a>
        </div>
    </div>
@endsection