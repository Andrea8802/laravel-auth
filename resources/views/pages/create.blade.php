@extends('layouts.main-layout')
@section('content')
    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>

        <label for="description">Description: </label>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>

        <label for="main_image">Link Image: </label>
        <input type="file" name="main_image">
        <br>

        <label for="release_date">Release Date: </label>
        <input type="date" name="release_date">
        <br>

        <label for="repo_link">Repo Link: </label>
        <input type="text" name="repo_link">
        <br>
        <input type="submit" value="Add Project">
    </form>
@endsection
