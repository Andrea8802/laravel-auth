@extends('layouts.main-layout')
@section('content')

@foreach ($projects as $project)
@if (Auth::check())
<a href="{{route('project.delete', $project)}}">X</a>
@endif
<a href="{{route('project.show', $project)}}">
    {{$project -> name}}
</a>
    <br>
    <br>
@endforeach
@endsection
