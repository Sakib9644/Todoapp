@extends('layouts.app')

@section('content')
    <h1>Create New To-do</h1>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
@endsection
