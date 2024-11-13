<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'index']);
Route::get('/profile/{id}', [UserController::class, 'showUser']);
Route::get('/user/{id}/courses', [UserController::class, 'users']);
Route::get('/course/{id}/users', [CourseController::class, 'users']);