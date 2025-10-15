<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/student', [StudentController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::get('/guardians', [GuardianController::class, 'index'])->name('guardians.index');
Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});