@extends('layouts.app')

@section('content')
    <h1>To-do Details</h1>
    <h2>{{ $todo->title }}</h2>
    <p>{{ $todo->description }}</p>
    
    <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
    

    
    <a href="{{ route('todos.index') }}">Back to List</a>
@endsection
