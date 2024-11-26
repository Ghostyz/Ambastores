<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {return view('homepage');})->name('homepage');
Route::get('/register', function () {return view('registerForm');})->name('register');
Route::get('/login', function () {return view('login');})->name('login');

Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::get('/signup', [UserController::class, 'signupForm'])->name('signup.submit');
Route::post('/signup', [UserController::class, 'signup'])->name('signup.form');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'registerForm'])->name('register.form');

Route::get('/IGI', [UserController::class, 'IGIForm'])->name('IGI.form');

// composer require laravel/sanctum ini run riq