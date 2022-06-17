<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index() {
        return view('transactions');
    }

    public function signin() {
        return view ('signin');
    }

    public function signup() {
        return view ('signup');
    }
}
