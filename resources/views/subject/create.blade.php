@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Store New Subject Data</h1>
        <form action="{{ route('subjects.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label fw-bold">Detail:</label>
                <textarea name="detail" id="detail" cols="30" rows="3" class="form-control" placeholder="Detail"></textarea>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="teacher_id" class="form-label">Teacher Name:</label>
                <select name="teacher_id" id="teacher_id" class="form-control">
                    <option value="">-- Choose Teacher Name --</option>
                    @foreach ($teachers as $teacher )
                     <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>
                 @error('teacher_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
                <input type="submit" value="Create" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection