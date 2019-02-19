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

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th width="40%">Name</th>
                <th width="40%">Description</th>
                <th width="20%" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td class="ellipsis">{{ $project->description }}</td>
                <td class="text-center">
                    <a href="{{ route('projects.show', [$project->id]) }}"><i class="far fa-eye"></i></a>
                    <a href="{{ route('projects.edit', [$project->id]) }}"><i class="far fa-edit"></i></a>
                    <a href="{{ route('projects.destroy', [$project->id]) }}"><i class="fas fa-minus-circle"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


@stop