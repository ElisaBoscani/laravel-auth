@extends('layouts.admin')


@section('content')

<h1>Dati</h1>
<li><a href="{{route('admin.projects.create')}}">Creare</a></li>
<div class="container">

  <table class="table">
    <thead>

      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
        <th>Action</th>
      </tr>

    </thead>
    <tbody>
      @foreach($projecs as $projec)
      <tr>
        <td>
          {{$projec->id}}
        </td>
        <td>
          {{$projec->title}}
        </td>
        <td>
          {{$projec->content}}
        </td>
        <td>

          @if (($projec->cover_image))
          <img class="w-100" src="{{ $projec->cover_image }}" alt="">

          @else
          Not
          @endif
        </td>


      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection