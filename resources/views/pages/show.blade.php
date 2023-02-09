@extends('layouts.main-layout')
@section('content')
    <b>Name: </b>{{$project ->name}}
    <br>
    <b>Description: </b>{{$project ->description}}
    <br>
    <img src="{{$project ->main_image}}" alt="imgProject">
    <br>
    <b>Date Release: </b>{{$project ->release_date}}
    <br>
    <b>Link Repo: </b><a href="{{$project ->repo_link}}">
    HERE</a>
    <br>

@endsection
