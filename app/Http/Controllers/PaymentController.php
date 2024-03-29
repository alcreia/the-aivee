<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Purchase;

class PaymentController extends Controller
{
    //

    public function index($id)
    {
    	
        $user = Purchase::firstOrCreate(['book_id' => $id, 'user_id' => Auth::user()->id], ['purchase_code' => Purchase::generateCode()]);
        $premium = DB::table('purchases')->where('book_id', $id)->where('user_id', Auth::user()->id)->value('purchased');
        $img = DB::table('books')->where('id', $id)->value('cover');


        if ($premium == 1) {
            return redirect()->action('BookController@index', array('id' => $id));
        } else {
            $code = DB::table('purchases')->where('book_id', $id)->where('user_id', Auth::user()->id)->value('purchase_code');
    		return view('payment',['code' => $code, 'img' => $img, 'id' => $id]);
    	}
    }
}
