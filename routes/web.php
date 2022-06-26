<?php

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SigninController::class, 'signin']);

Route::resource([
    'transactions' => TransactionsController::class,
    'users' => UserController::class
]);
