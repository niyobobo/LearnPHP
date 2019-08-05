<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
	public function index()
	{
		return redirect('projects');
	}

	public function contact()
	{
		return view('contact');
	}

	public function about()
	{
		return view('about');
	}
}
