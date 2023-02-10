@extends('layouts.main-layout')
@section('content')
    <div class="container ms_container-form d-flex justify-content-center">
        <form action="{{ route('admin.project.update', $project) }}" method="POST" enctype="multipart/form-data"
            class="col-6">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                    value="{{ $project->name }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description: </label>
                <textarea name="description" class="form-control" id="exampleFormControlInput1" cols="10" rows="4">{{ $project->description }}</textarea>
            </div>


            <div class="mb-3">
                <label for="main_image" class="form-label">Load Image: </label>
                <input class="form-control" type="file" id="formFile" name="main_image" id="exampleFormControlInput1"
                    value="{{ $project->main_image }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Image Preview: </label>
                <br>
                <img src="{{ asset('storage/' . $project->main_image) }}" class="ms_img_preview" alt="">
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">Release Date: </label>
                <input type="date" name="release_date" class="form-control" id="exampleFormControlInput1"
                    value="{{ $project->release_date }}">
            </div>

            <div class="mb-3">
                <label for="repo_link" class="form-label">Repo Link: </label>
                <input type="text" name="repo_link" class="form-control" id="exampleFormControlInput1"
                    value="{{ $project->repo_link }}">
            </div>
            <input type="submit" value="Update Project" class="btn btn-primary">

        </form>
    </div>
@endsection
