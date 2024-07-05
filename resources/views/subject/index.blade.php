@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>List Of Subjects</h1>
        <a href="{{ route('subjects.create') }}">Create</a>
          <table class="table table-bordered table-sm table-striped mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Detail</th>
                    <th>Teacher Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $sub )
                    <tr>
                        <td>{{$sub->id}}</td>
                        <td>{{$sub->title}}</td>
                        <td>{{$sub->detail}}</td>
                        <td>
                            <a href="{{route('teachers.show',['teacher' => $sub->teacher])}}">{{$sub->teacher->name}}</a>
                        </td>
                        <td>
                            <a href="{{ route('subjects.edit',['subject' => $sub]) }}">Edit</a>
                           <form action="{{route('subjects.destroy',['subject'=>$sub])}}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" onclick="alert(Are you sure you want to delete)" value="Delete" class="border-0 bg-transparent link-danger text-decoration-underline">
                           </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection