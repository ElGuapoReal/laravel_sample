<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserComment;
use App\UserFile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   $users = User::all();
        return view('home', compact('users'));
    }
	
	public function detail($id)
	{
		$user = User::find($id);
		$files = UserFile::where('user_id', $id)->get();
		$comments = UserComment::where('user_id', $id)->get();
		return view('detail', compact('user', 'files', 'comments'));
	}
	
	public function download($filename)
	{
		
		$file = '../storage/app/filename/'.$filename;
        $name = basename($file);
		//dump($name); 
		//die();
        return response()->download($file, $name);
		
	}
}
