<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$projects = Project::all();
		return view('welcome')->with([
			'foo' => 'Foobar',
			'projects' => $projects,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validated = $request->validate([
			'title' => 'required|min:3',
			'description' => 'required|min:5'
		]);
		Project::create($validated);
		return redirect('projects');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function show(Project $project)
	{
		return view('show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Project $project)
	{
		return view('edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Project $project)
	{
		$project->update(request(['title', 'description']));
		return redirect('projects');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Project $project)
	{
		Project::findOrFail($project->id)->delete();
		return redirect('projects');
	}
}
