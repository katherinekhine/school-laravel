@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Subject Data</h1>
        <form action="{{ route('subjects.update', ['subject' => $subject]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{$subject->title}}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label fw-bold">Detail:</label>
                <textarea name="detail" id="detail" cols="30" rows="3" class="form-control" placeholder="Detail">{{$subject->detail}}</textarea>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="teacher_id" class="form-label fw-bold">Teacher ID:</label>
                <input type="text" name="teacher_id" id="teacher_id" class="form-control" placeholder="Teacher ID" value="{{$subject->teacher_id}}">
                @error('teacher_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <a href="{{ route('subjects.index')}}" class="btn btn-outline-secondary">Back</a>
                <input type="submit" value="Update" class="btn btn-outline-warning">
            </div>
        </form>
    </div>
@endsection