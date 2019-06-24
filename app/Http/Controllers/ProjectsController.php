<?php

namespace App\Http\Controllers;


use App\Project;
use App\Mail\ProjectCreated;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        // $projects = Project::where('id_user', auth()->id())->get();
        // $projects = auth()->user()->projects;
        // return view('projects.index', compact('projects'));
        // return view('projects.index', compact('projects'));

        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    public function show(Project $project) {
        // varias maneras de hacerlo
        // abort_unless($project->id_user == auth()->id(), 403, 'You cant handle the truth');

        // abort_unless(auth()->user()->owns($project), 403);

        //usando policy
        // abort_if(\Gate::denies('update', $project), 403,);
        $this->authorize('update', $project);

        return view('projects.show', compact('project'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {

        $attributes = $this->validateProject();

        $attributes['id_user'] = auth()->id();

        $project = Project::create($attributes);

        Mail::to(auth()->user()->email)->send(
            new ProjectCreated($project)
        );

        return redirect()->route('projects.index');
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {

        $attributes = $this->validateProject();

        $project->update($attributes);

        return redirect()->route('projects.index');

    }

    public function destroy(Project $project) {
        $project->delete();

        return redirect()->route('projects.index');
    }

    public function validateProject() {
        return request()->validate([
            'title'         => ['required', 'min:3', 'max:100'],
            'description'   => ['required', 'min:3']
        ]);
    }

    //ejemplo en la terminal - php artisan migrate
    public function name() {
        return 'My name is Bond, James Bond';
    }

}
