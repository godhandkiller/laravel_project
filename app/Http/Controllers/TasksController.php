<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class TasksController extends Controller{

    public function store(Project $project) {

        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);

        $project->addTask($attributes);

        // Task::create([
        //     'project_id'    => $project->id,
        //     'body'          => request('body')
        // ]);

        return back();
    }

    public function update(Task $task) {
        // $task->complete(request()->has('completed'));

        // $task->update([
        //     'completed' => request()->has('completed')
        // ]);

        request()->has('completed')? $task->complete() : $task->incomplete();

        return back();
    }

    public function destroy(Task $task) {
        dd('entro');
        $task->delete();

        // return redirect()->back();
    }

}
