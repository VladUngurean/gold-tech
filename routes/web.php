<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {return view('pages/mainPage/index');})->name('home');
Route::get('/panel', function () {return view('panel/panel');})->name('panel');

Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store'])->name('user.store');
Route::get('login', [UserController::class, 'login'])->name('login');

Route::get('/panel/reviews', [ReviewController::class, 'index'])->name('review');
Route::get('/panel/reviews/create', [ReviewController::class, 'create'])->name('review.create');
Route::post('/panel/reviews', [ReviewController::class, 'store'])->name('review.store');
Route::get('/panel/{review}/edit', [ReviewController::class, 'edit'])->name('review.edit');
Route::put('/panel/{review}/update', [ReviewController::class, 'update'])->name('review.update');
Route::delete('/panel/{review}/delete', [ReviewController::class, 'delete'])->name('review.delete');
