<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\TransactionType;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //TODO: Transferir o código sessionHasNoUser para um middleware
        $sessionHasNoUser = !$request->session()->has('user');

        if ($sessionHasNoUser) {
            return redirect()->to(route('signin'));
        }

        $user = $request->session()->get('user');

        $transactions = Transaction::where('user_id', $user['id'])->get();

        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO: Validate session with middleware

        $transactionData = $request->all();

        $userId = $request->session()->get('user')['id'];
        $user = User::find($userId);

        //TODO: Validate if user exists

        $transactionTypeId = 1;
        $transactionType = TransactionType::find($transactionTypeId);

        $transaction = new Transaction();
        $transaction->title = $transactionData['title'];
        $transaction->amount = $transactionData['amount'];

        $transaction->user()->associate($user);
        $transaction->type()->associate($transactionType);

        $transaction->save();

        return redirect()->to(route('transactions.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
