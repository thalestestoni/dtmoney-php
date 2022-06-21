<?php

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SigninController::class, 'signin']);

Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::resource('transactions', TransactionsController::class);
