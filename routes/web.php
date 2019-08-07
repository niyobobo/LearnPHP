<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

  GET /projects           (index)
  GET /projects/create    (create) //For form handling
  GET /projects/1         (show)
  POST /project           (store)  // For saving data from the form
  GET /projects/1/edit    (edit)
  PATCH /projects/1       (update)
  DELETE /projects/1      (destroy)

*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectController');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
