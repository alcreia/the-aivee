<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    //
	
    public function index($id)
    {
    	$title = DB::table('books')->where('id', $id)->value('title');
    	$synopsis = DB::table('books')->where('id', $id)->value('synopsis');
    	$cover = DB::table('books')->where('id', $id)->value('cover');
    	$premium = DB::table('purchases')->where('book_id', $id)->where('user_id', Auth::user()->id)->value('purchased');

    	return view('books', [
    		'premium' => $premium,
    		'title' => $title,
    		'synopsis' => $synopsis,
    		'cover' => $cover,
    		'id' => $id
    	]);
    }
}
