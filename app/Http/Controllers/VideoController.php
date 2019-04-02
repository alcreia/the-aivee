<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    //

    public function index($id) {

        $book = DB::table('videos')->where('id', $id)->value('book_id');
        $premium = DB::table('purchases')->where('user_id', Auth::user()->id)->where('book_id', $book)->value('purchased');

        if ($premium == 0) {
            return redirect()->action('BookController@index', array('book' => $book));
        } else {
            $code = DB::table('videos')->where('id', $id)->value('embed_link');
            return view('watch', ['code' => $code, 'id' => $id, 'book' => $book]);
        }
        
    }

}
