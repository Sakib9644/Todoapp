<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Create a new to-do (GET and POST routes)
route::resource("/todos", TodoController::class);
