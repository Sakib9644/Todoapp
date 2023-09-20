<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Create a new to-do (GET and POST routes)
Route::get('todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('todos', [TodoController::class, 'store'])->name('todos.store');

// List all to-dos
Route::get('todos', [TodoController::class, 'index'])->name('todos.index');

// Update a specific to-do (GET and PUT routes)
Route::get('todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::put('todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

// Delete a specific to-do (DELETE route)
Route::delete('todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
