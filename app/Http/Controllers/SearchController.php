<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request)
    
    {
        $query = $request->input('query');

        $posts = Post::where('content', 'like', "%{$query}%")->get();
        $comments = Comment::where('content', 'like', "%{$query}%")->get();

        return response()->json([
            'posts' => $posts,
            'comments' => $comments,
        ]);
    }
}
