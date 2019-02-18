@extends('layout')

@section('title', 'Create Project')

@section('content')
    <h1>Create Project</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col form-group">
                <label class="form-control-label">Title</label>
                <input class="form-control" type="text" name="title" placeholder="Title">
            </div>
        </div>
        <div class="form-row">
            <div class="col form-group">
                <label class="form-control-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col form-group">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </div>
    </form>
@stop