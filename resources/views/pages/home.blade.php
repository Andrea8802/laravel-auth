@extends('layouts.main-layout')
@section('content')
    <div class="container ms_main d-flex
    justify-content-center flex-wrap gap-5">

        @foreach ($projects as $project)
            <div class="card" style="width: 18rem;">

                <img src="{{ $project->main_image }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>

                    @if ($project->description !== null)
                        <p class="card-text ms_desc">{{ $project->description }}</p>
                    @else
                        <p class="card-text ms_desc">-No Description-</p>
                    @endif
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="{{ route('project.show', $project) }}" class="btn btn-primary">More Info</a>
                    </li>
                </ul>

                @auth
                    <div class="card-body">
                        <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-secondary">Modify</a>
                        <a href="{{ route('admin.project.delete', $project) }}" class="btn btn-danger">Remove</a>
                    </div>
                @endauth

            </div>
        @endforeach
    </div>
@endsection
