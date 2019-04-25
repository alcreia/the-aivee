<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = ['body', 'video_id', 'user_id'];
    
    public function video()
    {
    	return $this->belongsTo(Video::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
