@extends('layouts.admin')


@section('content')
<h1>Progetto {{$project->id}}</h1>
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="card border-0" style="width: 18rem;">
      <h3 class="text-center">{{$project->title}}</h3>
      <div class="card-body">
        <img src="{{$project->cover_image}}" class="card-img-top" alt="">
        <p class="card-text">{{$project->content}}</p>

      </div>
    </div>
  </div>
</div>
@endsection