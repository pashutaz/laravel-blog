<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\POST;

class PostController extends Controller
{
	public function index(){
		return view('posts.index');
	}


	public function show()	
	{
		return view('posts.show');
	}


	public function create()
	{
		return view('posts.create');
	}

	public function store()
	{
		// // Create a new post using request data
		// $post = new POST;
		// $post->title = request('post-title');
		// $posts->body = request('post-body');

		// // Save to database
		// $post->save();

		POST::create([
			'title' => request('post-title'),
			'body' => request('post-body'),
		]);

		// redirect to home page
		return redirect('/');
	}


	public function test(){
		return view('test');
	}
}
