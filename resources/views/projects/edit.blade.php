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
            <div class="col-12 form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-danger" href="{{route('projects.delete', ['id' => $project->id ])}}">Delete</a>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="row">
            <div class="col">
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
@stop