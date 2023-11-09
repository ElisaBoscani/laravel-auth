@extends('layouts.admin')


@section('content')
<div class="container">
  <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control " name=" title" id="title" aria-describedby="helpId" placeholder="Title" value="{{old('title')}}">
      <small id="nameHelper" class="form-text text-muted">Type the name here</small>
    </div>
    <div>
      <label for="content" class="form-label">Content</label>
      <input type="text" class="form-control " name=" content" id="content" aria-describedby="helpId" placeholder="Title" value="{{old('content')}}">
      <small id="nameHelper" class="form-text text-muted">Type the content here</small>
    </div>
    <div class="mb-3">
      <label for="cover_image" class="form-label">Choose file</label>
      <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="" aria-describedby="cover_image_helper">
      <div id="cover_image_helper" class="form-text">Upload an image for the current product</div>
    </div>
    <button type="submit" class="btn btn-primary">
      Save
    </button>
  </form>
</div>
@endsection