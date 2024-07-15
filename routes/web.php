<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/subjects');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Teacher
// Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
// Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
// Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
// Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');
// Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
// Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');
// Route::delete('/teachers/{teacher}', [TeacherController::class, 'delete'])->name('teachers.delete');

Route::resource('teachers', TeacherController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('students', StudentController::class);
Route::resource('classrooms', ClassroomController::class);
