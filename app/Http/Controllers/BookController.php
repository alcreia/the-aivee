<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    //
	
    public function index()
    {
    	$premium = DB::table('purchases')->where('user_id', Auth::user()->id)->value('purchased');

    	return view('books', ['premium' => $premium]);
    }
}
