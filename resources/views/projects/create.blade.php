@extends('layout')

@section('title', 'Create Project')

@section('content')
    <h1>Create A New Project</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col form-group">
                <label class="form-control-label">Title</label>
                <input class="form-control {{ $errors->has('title')? 'is-invalid' : ''}}" type="text" name="title" value="{{ old('title') }}" autocomplete="off">
            </div>
        </div>
        <div class="form-row">
            <div class="col form-group">
                <label class="form-control-label">Description</label>
                <textarea class="form-control {{ $errors->has('description')? 'is-invalid' : ''}}" name="description">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col form-group">
                <button class="btn btn-primary" type="submit">Create</button>
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