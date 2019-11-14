<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //

    protected $fillable = ['video_id','embed_link'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    
}
