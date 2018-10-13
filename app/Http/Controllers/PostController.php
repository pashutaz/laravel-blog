<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\POST;

class PostController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
	}

	public function index(){
		$posts = Post::latest()->get();

		return view('posts.index', compact('posts'));
	}


	public function show(Post $post)	
	{
		return view('posts.show', compact('post'));
	}


	public function create()
	{
		return view('posts.create');
	}

	public function store()
	{
		$this->validate(request(), [
			'post-title' => 'required',
			'post-body' => 'required'
		]);

		// TODO:: request
		auth()->user()->publish(
			new Post(['title'=>request('post-title'), 'body'=>request('post-body')])
		);

		return redirect()->home();
	}


	public function test(){
		return view('test');
	}
}
