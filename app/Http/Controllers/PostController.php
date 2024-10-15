<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
	{
		request()->validate([
			'content' => 'required|min:5|max:255',
		]);

		Post::create(
			[
				'content' => request('content'),
				'likes' => 0,
			]
		);
		return redirect()->route('dashboard')->with('success', 'Post bol vytvoreny');	
	}

	public function destroy(Post $post)
	{
		
		$post->delete();
		
		return redirect()->route('dashboard')->with('success', 'Post bol zmazany');
	}

	public function show(Post $post)
	{
		return view('posts.show', ['post' => $post]);
	}

	public function edit(Post $post)
	{
		// Return the view for editing the post
		return view('posts.edit', ['post' => $post]);
	}

	public function update(Request $request, Post $post)
	{
		$request->validate([
			'content' => 'required|min:5|max:255',
		]);

		$post->update([
			'content' => $request->input('content'),
		]);

		return redirect()->route('dashboard')->with('success', 'Post has been updated successfully');
	}

}
