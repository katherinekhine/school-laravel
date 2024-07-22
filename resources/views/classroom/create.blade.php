@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $classroom->exists ? "Update Classroom Information" : "Create New Class"}}</h1>
        <form action="{{$classroom->exists ? route('classrooms.update',['classroom'=> $classroom]) : route('classrooms.store')}}" method="POST">
            @csrf
            @if ($classroom->exists)
                @method('PUT')
            @endif
            <div class="mb-2">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" id="title" placeholder="Classroom Title" class="form-control" value="{{old('title', $classroom->title)}}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="detail" class="form-label">Details:</label>
                <input type="text" name="detail" id="detail" placeholder="Classroom of Class" class="form-control" value="{{old('detail', $classroom->detail)}}">
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="teacher_id" class="form-label">Teacher:</label>
                <select name="teacher_id" id="teacher_id" class="form-control">
                    <option value="">-- Choose Teacher --</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}" @selected(($classroom->exists && old('teacher_id',$classroom->teacher->id) == $teacher->id) || old('teacher_id') == $teacher->id)>
                                {{ $teacher->name }}
                            </option>
                        @endforeach
                </select>
                @error('teacher_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2">
                <label for="subject_id" class="form-label">Subject:</label>
                <select name="subject_id" id="subject_id" class="form-control">
                    <option value="">--Choose Subject--</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}" @selected(($classroom->exists && old('subject_id',$classroom->subject->id) == $subject->id) || old('subject_id') == $subject->id)>
                            {{ $subject->title }}
                        </option>
                    @endforeach
                </select>
                @error('subject_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

             <div>
                <a href="{{ route('classrooms.index') }}" class="btn btn-outline-secondary">Back</a>
                <input type="submit" value="{{$classroom->exists ? "Update" : "Add"}}" class="btn {{$classroom->exists ? "btn-outline-warning" : "btn-outline-primary"}}">
            </div>
        </form>
    </div>
@endsection