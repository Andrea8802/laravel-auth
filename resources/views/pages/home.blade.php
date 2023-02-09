@extends('layouts.main-layout')
@section('content')

@foreach ($projects as $project)
@if (Auth::check())
<a href="{{route('project.delete', $project)}}">X</a>
@endif
{{$project -> name}}
    <br>
    <br>
@endforeach
@endsection
