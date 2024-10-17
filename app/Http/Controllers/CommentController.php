<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:10',
        ]);

        if (!session()->has('guest_id')) {
            session()->put('guest_id', uniqid('guest_', true));
        }

        
        $post = Post::findOrFail($postId);

      $post->comments()->create([
            'content' => $validatedData['content'],
            'user_id' => session('guest_id'), 
        ]); 
        return redirect()->back()->with('success', 'Comment posted successfully!');
    }


    
    
    
}
