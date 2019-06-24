<?php

use App\Services\Twitter;

Route::get('/', function (Twitter $twitter) {
    return view('welcome');
});

//Esta función registra todas las rutas necesarias como index, show, store, etc.
Route::resource('projects', 'ProjectsController');

// Route::get('/projects', 'ProjectsController@index')->name('projects.index');
// Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
// Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show');
// Route::post('/projects', 'ProjectsController@store')->name('projects.store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');
// Route::patch('/projects/{project}', 'ProjectsController@update')->name('projects.update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy')->name('projects.destroy');

// Route::patch('/tasks/{task}', 'TasksController@update')->name('task.update');

// Route::resource('tasks', 'TasksController');
Route::patch('/tasks/{task}', 'TasksController@update')->name('tasks.update');

Route::post('/project/{project}/tasks', 'TasksController@store')->name('tasks.store');

Route::delete('/tasks/{task}', 'TasksController@destroy')->name('tasks.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
