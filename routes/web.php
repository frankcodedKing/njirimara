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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/', [App\Http\Controllers\VisitorController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\VisitorController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\VisitorController::class, 'services'])->name('services');
Route::get('/projects', [App\Http\Controllers\VisitorController::class, 'projects'])->name('projects');
Route::get('/blog', [App\Http\Controllers\VisitorController::class, 'blog'])->name('blog');
Route::get('/blogdetails', [App\Http\Controllers\VisitorController::class, 'blogdetails'])->name('blogdetails');
