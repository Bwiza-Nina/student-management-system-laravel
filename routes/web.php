<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'validation'])->name('register.course');
Route::get('/registerTeacher', [\App\Http\Controllers\registerTeacherController::class, 'index']);
Route::post('/registerTeacher', [\App\Http\Controllers\registerTeacherController::class, 'validation'])->name('register.teacher');
Route::get('/success', [\App\Http\Controllers\registerTeacherController::class, 'success']);
Route::post('/success', [\App\Http\Controllers\registerTeacherController::class, 'loginCheck'])->name('login.teacher');