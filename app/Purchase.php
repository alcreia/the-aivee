<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //

	protected $table = 'purchases';

	protected $fillable = [
		'user_id', 'book_id', 'purchase_code'
	];
    public static function generateCode()
    {
    	$length = 8;
    	$str = "";
		$characters = array_merge(range('A','Z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}

}
