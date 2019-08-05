@extends('container.layout')
@section('content')
<h1>Crete new Project</h1>
<form method="POST" action="/projects">
  {{ csrf_field() }}
  <div>
    <input type="text" name="title" placeholder="Title" />
  </div>
  <div>
    <textarea type="text" name="description" placeholder="Description"></textarea>
  </div>
  <div>
    <button type="submit">Create project</button>
  </div>
</form>
@endsection