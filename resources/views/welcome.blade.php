@extends('container.layout')
@section('content')
<h1 class="title">Projects</h1>
<ol>
	@foreach($projects as $project)
	<a href="/projects/{{$project->id}}">
		<li>{{$project->description}}</li>
	</a>
	@endforeach
</ol>
@endsection