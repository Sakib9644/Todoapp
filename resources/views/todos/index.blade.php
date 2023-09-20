@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5">To-do List</h1>

    <ul class="list-group mt-3">
        @foreach ($todos as $todo)
        <li class="list-group-item d-flex justify-content-between align-items-center" >
            <div class="todo-info">
                <h3>{{ $todo->title }}</h3>
                <p>{{ $todo->description }}</p>
               
            </div>
            <div class="btn-group" role="group">
                <form action="{{ route('todos.destroy', $todo->id) }}" method="post" class="mr-2">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm delete-button">Delete</button>
                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-warning btn-sm">Show</a>
                </form>
                
            </div>
        </li>
        @endforeach
    </ul>

    <a href="{{ route('todos.create') }}" class="btn btn-success mt-3">Create New</a>
</div>

<style>
    /* Custom CSS for button spacing and hover effect */
    .delete-button {
        margin-right: 10px; /* Adjust the margin as needed */
    }

    .delete-button:hover {
        background-color: #dc3545; /* Change the background color on hover (Bootstrap danger color) */
    }

    /* Custom CSS for status text color */
    .text-success {
        color: green;
    }

    .text-warning {
        color: orange;
    }
</style>
@endsection
