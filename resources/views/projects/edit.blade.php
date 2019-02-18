@extends('layout')

@section('title', 'Edit')

@section('content')
    <h1>Edit Proyect</h1>

    <form method="POST" action="{{ route('projects.update',['id' => $project->id]) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col form-group">
                <label class="form-control-label">Title</label>
                <input class="form-control" type="text" name="title" value="{{ $project->title }}" autocomplete="off">
            </div>
        </div>
        <div class="form-row">
            <div class="col form-group">
                <label class="form-control-label">Description</label>
                <textarea class="form-control" name="description">{{ $project->description }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-2 form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    <form method="POST" action="{{ route('projects.destroy', ['id' => $project->id]) }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-2 form-group">
                <button type="submit" class="btn btn-light">Delete</button>
            </div>
        </div>
    </form>
@stop