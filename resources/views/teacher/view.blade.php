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
       <a href="{{route('teachers.index')}}">&lt;&lt;Back</a>
    </div>
@endsection