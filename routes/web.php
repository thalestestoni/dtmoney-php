<?php

use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransactionsController::class, 'index']);
