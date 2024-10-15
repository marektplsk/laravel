<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
	{
		request()->validate([
			'content' => 'required|min:10|max:255',
		]);

		Post::create(
			[
				'content' => request('content'),
				'likes' => 0,
			]
		);
		return redirect()->route('dashboard')->with('success', 'Post bol vytvoreny');	
	}

	public function destroy($id)
	{
		$post = Post::where('id', $id);
		$post->delete();
		
		return redirect()->route('dashboard')->with('success', 'Post bol zmazany');
	}
}
