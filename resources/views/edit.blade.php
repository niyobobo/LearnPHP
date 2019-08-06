@extends('container.layout')
@section('content')
<h1 class="title">Edit project</h1>
<form action="/projects/{{$project->id}}" method="POST">
  @method('PATCH')
  @csrf
  <div class="field">
    <label for="title" class="label">Title</label>
    <div class="control">
      <input type="text" name="title" placeholder="Title" class="input" value="{{$project->title}}">
    </div>
  </div>
  <div class="field">
    <label for="description" class="label">Description</label>
    <div class="control">
      <textarea name="description" id="description" class="textarea">{{$project->description}}</textarea>
    </div>
  </div>
  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Update project</button>
    </div>
  </div>
</form>
<form action="/projects/{{$project->id}}" method="POST" style="margin-top: 1rem">
  @csrf
  @method('DELETE')
  <div class="field">
    <div class="control">
      <button type="submit" class="button is-danger">Delete project</button>
    </div>
  </div>
</form>
@endsection