<?php

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SigninController::class, 'signin']);

Route::get('/signup', [SignupController::class, 'signup']);

Route::get('/transactions', [TransactionsController::class, 'index']);
Route::post('/transactions', [TransactionsController::class, '']);
