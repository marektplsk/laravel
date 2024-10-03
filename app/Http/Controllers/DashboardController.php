<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 




class DashboardController extends Controller
{
    public function index() {

        $post = new Post([
            'content' => "test 123",
            'likes' => 15,
        ]);

        $post->save();

        $posts = Post::take(3)->get(); // Limit to 3 posts

        $users = [
            [
                'name' => 'Robert Burian',
                'vek' => '12'
            ],
            [
                'name' => 'Pato Mirdza',
                'vek' => '20'
            ],
            [
                'name' => 'Smart-> Cigan',
                'vek' => '20'
            ]
           
        ]; 
        return view('Dashboard', 
        [
            'users' => $users, 
            'posts' => Post::orderBy('likes', 'DESC')->get(), 

        ]); 
    }
}