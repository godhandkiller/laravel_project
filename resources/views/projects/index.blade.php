@extends('layout')

@section('title', 'Projects')

@section('content')
    <div class="row mt-2">
        <div class="col">
            <h1>Projects</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary float-right" href="{{ route('projects.create') }}">New Project</a>
        </div>
    </div>

    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project->title }}
                <a href="{{ route('projects.show', [$project->id]) }}">View</a>
                <a href="{{ route('projects.edit', [$project->id]) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@stop