@extends('layouts.admin')


@section('content')
<h1>Progetto {{$project->id}}</h1>
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="card border-0" style="width: 18rem;">
      <h3 class="text-center">{{$project->title}}</h3>
      <div class="card-body">
        @if (str_contains($projec->cover_image, 'http'))
        <img class="w-100" src="{{ $projec->cover_image }}" alt="">

        @else
        <img class="w-100" src="{{ asset('storage/' . $projec->cover_image) }}" alt="">
        @endif
        <p class="card-text">{{$project->content}}</p>

      </div>
    </div>
  </div>
</div>
@endsection