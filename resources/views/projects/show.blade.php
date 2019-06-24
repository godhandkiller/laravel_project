@extends('layout')

@section('title', $project->title)

@section('content')
    <div class="row my-3">
        <div class="col-10">
            <h1>{{ $project->title }}</h1>
        </div>
        <div class="col-2 my-auto">
            <a class="float-right" href="{{ route('projects.edit', [$project->id]) }}"><i class="fas fa-edit"></i></a>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            {{ $project->description }}
        </div>
    </div>

    {{-- @if (!$project->tasks->isEmpty()) --}}
        <div class="row my-3">
            <div class="col">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info"><h5>Tasks</h5></li>
                    @foreach ($project->tasks as $task)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <form method="POST" action="{{ route('tasks.update', [$task->id]) }}">
                                @method('PATCH')
                                @csrf
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck{{$task->id}}"  name="completed" onchange="this.form.submit()" {{ $task->completed? 'checked' : ''}}>
                                    <label class="custom-control-label {{ $task->completed? 'text-success del-text' : ''}}" for="customCheck{{$task->id}}">{{ $task->body }}</label>
                                </div>
                            </form>
                            @if ($task->completed)
                                <span class="text-success">
                                    <i class="fas fa-check"></i>
                                </span>
                            @endif

                            {{-- <form metod="POST" action="{{ route('tasks.destroy', [$task->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-times"></i></button>
                            </form> --}}
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <form class="my-auto w-100" method="POST" action="{{ route('tasks.store', [$project->id]) }}">
                            @csrf
                            <div class="d-flex">
                                <input class="form-control {{ $errors->has('body')? 'is-invalid':''}}" type="text" name="body" placeholder="Add task" autocomplete="off">
                                <button class="btn btn-primary btn-round my-auto ml-2" type="submit"><i class="fas fa-plus"></i></button>
                            </div>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    {{-- @endif --}}
@stop