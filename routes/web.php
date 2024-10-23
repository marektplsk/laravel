<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController; 


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/post', [PostController::class, 'store'])->name('post.create');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/profile', function () {
    return view('profile');  
})->middleware('auth')->name('profile');

Route::get('/profile', [AuthController::class, 'showProfile'])->middleware('auth')->name('profile');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



