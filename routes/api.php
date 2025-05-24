<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/reservations', [ReservationController::class, 'index']);
Route::post('/reservations', [ReservationController::class, 'store']);
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::post('/courses', [CoursesController::class, 'store']);
Route::delete('/courses/{id}', [CoursesController::class, 'destroy']);