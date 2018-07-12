<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserFile;

class UserFileController extends Controller
{
    public function add($user_id)
	{		
		$user = User::find($user_id);
		return view('file', compact('user'));
	}
	
	public function save(Request $request)
	{
		//dump($request->filename);
		
		$request->filename->store('filename');
		$request->filename->storeAs('filename', $request->filename->getClientOriginalName());
		
		$userFile = new userFile;
		$userFile->filename = $request->filename->getClientOriginalName();
		$userFile->user_id = $request['user_id'];
		$userFile->save();
		
		return redirect('detail/'.$request['user_id']);
		
	}
}
