<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserComment;

class UserCommentController extends Controller
{
    public function add($user_id)
	{		
		$user = User::find($user_id);
		return view('comment', compact('user'));
	}
	
	public function save(Request $request)
	{
		//dump($request);
		//die();
		$userComment = new UserComment;
		$userComment->title = $request['title'];
		$userComment->body = $request['body'];
		$userComment->user_id = $request['user_id'];
		$userComment->save();
		
		return redirect('detail/'.$request['user_id']);
		
	}
}
