@extends('layouts.main-layout')
@section('content')
        <div class="container ms_main d-flex justify-content-center">
            
            <div class="card" style="width: 18rem;">
                <img src="{{$project->main_image}}" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">{{$project ->name}}</h5>
                @if($project ->description !== NULL)
                <p class="card-text">{{$project->description}}</p>
                @else
                <p class="card-text">-No Description-</p>
                @endif
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Release Date: </b>{{$project->release_date}}</li>
                  <li class="list-group-item">
                    Link Repository: 
                    <a href="{{$project->repo_link}}" class="card-link">HERE</a>
                </li>
                </ul>
                
                @auth
                <div class="card-body">
                    <a href="{{route('project.edit', $project)}}" class="btn btn-secondary">Modify</a>
                    <a href="{{route('project.delete', $project)}}" class="btn btn-danger">Remove</a>
                  </div>
                @endauth
              </div>
        </div>
@endsection
