<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;

Route::get('/posts', [PostController::class, 'index']);

Route::resource('projects', ProjectController::class);
