@extends('layouts.main-layout')
@section('content')
    <form action="{{ route('admin.project.update', $project) }}" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" value="{{ $project->name }}">
        <br>

        <label for="description">Description: </label>
        <textarea name="description" cols="30" rows="10">{{ $project->description }}</textarea>
        <br>

        <label for="main_image">Link Image: </label>
        <input type="text" name="main_image" value="{{ $project->main_image }}">
        <br>

        <label for="release_date">Release Date: </label>
        <input type="date" name="release_date" value="{{ $project->release_date }}">
        <br>

        <label for="repo_link">Repo Link: </label>
        <input type="text" name="repo_link" value="{{ $project->repo_link }}">
        <br>
        <input type="submit" value="Update Project">
    </form>
@endsection
