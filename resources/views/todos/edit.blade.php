


@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit To-do</h1>
        <form action="{{ route('todos.update', $todo->id) }}" method="POST" class="mt-3">
            @csrf
            @method('PUT')
          
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $todo->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $todo->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

