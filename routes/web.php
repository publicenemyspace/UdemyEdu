<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Category Controller
Route::get('/development', [App\Http\Controllers\CategoryController::class, 'development'])->name('development');
Route::get('/crypto', [App\Http\Controllers\CategoryController::class, 'crypto'])->name('crypto');
Route::get('/forex', [App\Http\Controllers\CategoryController::class, 'forex'])->name('forex');
Route::get('/programming', [App\Http\Controllers\CategoryController::class, 'programming'])->name('programming');
Route::get('/become_an_instructor', [App\Http\Controllers\CategoryController::class, 'become_an_instructor'])->name('become_an_instructor');
Route::get('/instructor', [App\Http\Controllers\CategoryController::class, 'instructor'])->name('instructor');
Route::get('/single_instructor', [App\Http\Controllers\CategoryController::class, 'single_instructor'])->name('single_instructor');



//Dashboard Controller
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/add', [App\Http\Controllers\DashboardController::class, 'add'])->name('add');
Route::get('/mycourses', [App\Http\Controllers\DashboardController::class, 'mycourses'])->name('mycourses');
Route::get('/myprofile', [App\Http\Controllers\DashboardController::class, 'myprofile'])->name('myprofile');
Route::post('/dashboard/addcourse', [App\Http\Controllers\DashboardController::class, 'addcourse'])->name('addcourse');



//Course Controller
Route::get('/coursedetail/{id}', [App\Http\Controllers\CourseController::class, 'course_detail'])->name('course_detail');