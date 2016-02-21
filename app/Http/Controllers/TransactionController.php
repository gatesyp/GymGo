<?php

namespace App\Http\Controllers;
use App\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $issues = Transaction::all();
        return response()->json($issues);
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
        echo "in store function";
//        echo $user;
        $capitalOne = \Illuminate\Http\Request::create('http://api.reimaginebanking.com/accounts/56c66be6a73e492741507c8f/transfers?key=fab8d98dc85bc29afbe6b9915f27a0e7', 'POST', ['medium' => 'balance', 'payee_id' => 'zxc', 'amount' => 50, 'transaction_date' => '2016-02-21', 'status' => 'pending', 'description' => 'Payment for personal training services']);

        $todayDate = '2016-02-21';

        $instance = new Transaction;

        $instance->payee_id = '56c66be6a73e492741507c90';
        $instance->amount = 50;
        $instance->type = 'p2p';
        $instance->transaction_date = $todayDate;
        $instance->medium = 'balance';
        $instance->save();
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
        $issue = Transaction::where('user_name', $id)->first();
        if($issue === null)
        {
            return "Request does not exist. ";
        }
        else
            $issue->delete();
//        echo $issue->exercise_name;
    }
}
