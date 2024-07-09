@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Update Data</h1>
        <form action="{{ route('teachers.update', ['teacher' => $teacher])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ old('name') ?? $teacher->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('emial') ?? $teacher->name }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label fw-bold">Date Of Birth:</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{ old ('dob') ?? $teacher->dob }}">
                @error('dob')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label fw-bold">Address:</label>
                <textarea name="address" id="address" cols="30" rows="3" class="form-control" placeholder="Address">{{ old('address') ?? $teacher->address }}</textarea>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <a href="{{ route('teachers.index')}}" class="btn btn-outline-secondary">Back</a>
                <input type="submit" value="Update" class="btn btn-outline-warning">
            </div>
        </form>
    </div>
@endsection