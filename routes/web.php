<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('pages/mainPage/index');})->name('home');
Route::get('/panel', function () {return view('panel/panel');})->name('panel');

Route::get('register', [\App\Http\Controllers\UserController::class, 'create'])->name('register');
Route::post('register', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
