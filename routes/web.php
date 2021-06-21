<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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
Route::get('/', [\App\Http\Controllers\StudentsController::class, 'index']);
Route::post('/', [\App\Http\Controllers\StudentsController::class, 'insertStudent'])->name('student_form');
Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'validation'])->name('register.course');
Route::get('/teachers', [\App\Http\Controllers\DisplayController::class, 'allTeachers']);
Route::get('/view-courses', [\App\Http\Controllers\courseViewController::class, 'index']);
