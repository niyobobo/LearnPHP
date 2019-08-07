@extends('container.layout')
@section('content')
<h1 class="title"> {{$project->title}} </h1>
<div class="content">
  {{$project->description}}
</div>
@if ($project->tasks->count())
<p style=>
  <a href="/projects/{{$project->id}}/edit">Edit</a>
</p>
<div class="box">
  @foreach ($project->tasks as $task)
  <div>
    <form action="/tasks/{{$task->id}}" method="POST">
      @csrf
      @method('PATCH')
      <label for="completed" class="checkbox {{ $task->completed ? 'is-complete':''}}">
        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked':''}}>
        {{$task->description}}
      </label>
    </form>
  </div>
  @endforeach
</div>
@endif
<form action="/projects/{{$project->id}}/tasks" method="POST" class="box">
  @csrf
  <div class="field">
    <label for="description" class="label">New task</label>
    <div class="control">
      <input class="input {{$errors->has('description') ? 'is-danger': ''}}" type="text" name="description"
        placeholder="New task" value="{{old('description')}}">
    </div>
  </div>
  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Add task</button>
    </div>
  </div>
  @include('errors')
</form>
@endsection