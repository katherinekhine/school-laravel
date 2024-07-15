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
            <label for="">Class:</label>
            <strong>{{$student->classroom_id}}</strong>
        </div>
        <div>
            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>
    </div>
@endsection