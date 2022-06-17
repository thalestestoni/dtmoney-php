<?php

use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransactionsController::class, 'signin']);

Route::get('/signup', [TransactionsController::class, 'signup']);

Route::get('/transactions', [TransactionsController::class, 'index']);
