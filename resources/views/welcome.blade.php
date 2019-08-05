@extends('container.layout')
@section('content')
<h1>Here we are</h1>
<ul>
	@foreach($tasks as $task)
	<li>{{$task}} {{$foo}}</li>
	@endforeach
</ul>
@endsection