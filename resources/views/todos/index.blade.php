@extends('layouts.app')

@section('content')
    <h1>To-do List</h1>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->title }} - <a href="{{ route('todos.edit', $todo->id) }}">Edit</a></li>
        @endforeach
    </ul>
    <a href="{{ route('todos.create') }}">Create New</a>

@endsection
