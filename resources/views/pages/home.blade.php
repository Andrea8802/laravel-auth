@extends('layouts.main-layout')
@section('content')

@foreach ($projects as $project)
@auth
<a href="{{route('project.delete', $project)}}">X</a>
@endauth
<a href="{{route('project.show', $project)}}">
    {{$project -> name}}
</a>
@auth
<a href="{{route('project.edit', $project)}}">ED</a>
@endauth
    <br>
    <br>
@endforeach
@endsection
