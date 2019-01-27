<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Purchase;

class PaymentController extends Controller
{
    //

    public function index()
    {
    	$user = Purchase::firstOrCreate(['user_id' => Auth::user()->id],['book_id' => 1, 'purchase_code' => Purchase::generateCode()]);

    	$code = DB::table('purchases')->where('user_id', Auth::user()->id)->value('purchase_code');
    	$premium = DB::table('purchases')->where('user_id', Auth::user()->id)->value('purchased');
        
        if ($premium === 1) {
            return redirect()->action('BookController@index');
        } else {
    		return view('payment',['code' => $code]);
    	}
    }
}
