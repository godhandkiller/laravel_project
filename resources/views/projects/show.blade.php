@extends('layout')

@section('title', $project->title)

@section('content')
    <div class="row">
        <div class="col-10">
            <h1>{{ $project->title }}</h1>
        </div>
        <div class="col-2 my-auto">
            <a class="btn btn-light float-right" href="{{ route('projects.edit', [$project->id]) }}">Edit</a>
        </div>
    </div>

    <p>
        {{ $project->description }}
    </p>

    @if (!$project->tasks->isEmpty())
        <div>
            <ul class="list-group">
                <li class="list-group-item list-group-item-info"><h5>Tasks</h5></li>
                @foreach ($project->tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <form method="POST" action="{{ route('tasks.update', [$task->id]) }}">
                            @method('PATCH')
                            @csrf
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck{{$task->id}}"  name="completed" onchange="this.form.submit()" {{ $task->completed? 'checked' : ''}}>
                                <label class="custom-control-label {{ $task->completed? 'text-success' : ''}}" for="customCheck{{$task->id}}">{{ $task->body }}</label>
                            </div>
                        </form>
                        @if ($task->completed)
                            <span class="text-success">
                                <i class="fas fa-check"></i>
                            </span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@stop