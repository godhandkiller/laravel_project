<?php

namespace App\Http\Controllers;


use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller{

    public function index() {

        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {

        $attributes = request()->validate([
            'title'         => ['required', 'min:3', 'max:100'],
            'description'   => ['required', 'min:3']
        ]);

        Project::create($attributes);

        return redirect()->route('projects.index');
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {;

        $project->update([
            'title'         => request('title'),
            'description'   => request('description')
        ]);

        return redirect()->route('projects.index');

    }

    public function destroy(Project $project) {
        dd('entro');
        $project->delete();

        return redirect()->route('projects.index');
    }

    //ejemplo en la terminal - php artisan migrate
    public function name() {
        return 'My name is Bond';
    }

}
