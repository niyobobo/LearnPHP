@extends('container.layout')
@section('content')
<h1>Crete new Project</h1>
<form method="POST" action="/projects">
  {{ csrf_field() }}
  <div class="field">
    <label for="title" class="label">Title</label>
    <div class="control">
      <input type="text" name="title" placeholder="Title" class="input {{$errors->has('title') ? 'is-danger': '' }}"
        value="{{old('title')}}">
    </div>
  </div>
  <div class="field">
    <label for="description" class="label">Description</label>
    <div class="control">
      <textarea name="description" id="description" placeholder="Description"
        class="textarea {{$errors->has('description') ? 'is-danger': '' }}">{{old('description')}}</textarea>
    </div>
  </div>
  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Create project</button>
    </div>
  </div>
  @if ($errors->any())
  <div class="notification is-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
</form>
@endsection