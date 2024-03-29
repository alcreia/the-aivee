<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Events\NewComment;
use App\Video;
use Illuminate\Http\Request;

class CommentController extends Controller
{
		//

    public function index(Video $video)
    {
    	return response()->json(
    		$video->comments()->with('user')->latest()->get()
		);
    }

    public function store(Video $video)
    {
    	$comment = $video->comments()->create([
    		'body' => request('body'),
            'video_id' => request('video_id'),
    		'user_id' => request('user_id'),
		]);
    $comment = Comment::where('id', $comment->id)->with('user')->first();
		broadcast(new NewComment($comment))->toOthers();
		return $comment;
    }
}
