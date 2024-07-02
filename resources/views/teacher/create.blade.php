@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Store New Data</h1>
        <a href="{{ route('teachers.index')}}">&lt;Back</a>
        <form action="{{ route('teachers.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label fw-bold">Date Of Birth:</label>
                <input type="date" name="dob" id="dob" class="form-control">
                @error('dob')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label fw-bold">Address:</label>
                <textarea name="address" id="address" cols="30" rows="3" class="form-control" placeholder="Address"></textarea>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" value="Create" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection