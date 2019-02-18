@extends('layout')

@section('title', $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>

    <p>
        {{ $project->description }}
    </p>

    <a href="{{ route('projects.edit', [$project->id]) }}">Edit</a>
@stop