@extends('layouts.app')

@section('content')
    <h1>Edit To-do</h1>
    <form action="{{ route('todos.update', $todo->id) }}" method="GET">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $todo->title }}">
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $todo->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
