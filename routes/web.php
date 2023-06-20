<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::get('/student/edit', [App\Http\Controllers\StudentController::class, 'edit']);
Route::get('/student/show', [App\Http\Controllers\StudentController::class, 'show']);