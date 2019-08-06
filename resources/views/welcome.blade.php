@extends('container.layout')
@section('content')
<h1>Here we are</h1>
<ul>
	@foreach($tasks as $task)
	<a href="/projects/{{$task->id}}">
		<li>{{$task->description}} {{$foo}}</li>
	</a>
	@endforeach
</ul>
@endsection