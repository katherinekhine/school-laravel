@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>List Of Subjects</h1>
          <table class="table table-bordered table-sm table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Detail</th>
                    <th>Teacher Name</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection