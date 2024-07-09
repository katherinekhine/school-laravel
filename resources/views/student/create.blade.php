@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>ADD New Students</h1>
        <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" email="email" id="email" class="form-control" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea name="address" id="address" cols="30" rows="3" class="form-control" placeholder="Address">{{old('address')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-control">Date of Birth:</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{old ('dob')}}">
            </div>
            <div class="mb-3">
                <label for="classroom_id" class="form-label">Class Room:</label>
                <select name="classroom_id" id="classroom_id" class="form-control">
                    <option value="">-- Choose Class</option>
                    <option value="1" {{ 1 == old('classroom_id') ? 'selected' : ' '}}>Class 1</option>
                    <option value="2" {{ 2 == old('classroom_id') ? 'selected' : ' '}}>Class 2</option>
                    <option value="3" {{ 3 == old('classroom_id') ? 'selected' : ' '}}>Class 3</option>
                </select>
            </div>
            <div>
                <input type="submit" value="ADD" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection