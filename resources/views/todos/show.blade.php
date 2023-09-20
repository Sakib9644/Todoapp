@extends('layouts.app')

@section('content')
    <h1>To-do Details</h1>
    <h2>{{ $todo->title }}</h2>
    <p>{{ $todo->description }}</p>
    <p>Status: {{ $todo->completed ? 'Completed' : 'Pending' }}</p>
    <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
    
    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    
    <a href="{{ route('todos.show') }}">Back to List</a>
@endsection
