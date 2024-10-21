<?php

namespace App\Http\Controllers;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index () {


        $posts = Post::orderBy('created_at', 'DESC');
        if (request()->has('search')){
            $posts = $posts->where('content' , 'like' , '%' . request()->get('search' , '') . '%');
        }
        
        $users = [
            [
                "name" => "Meno1",
                "vek" => "25"
            ],
            [
                "name" => "Meno2",
                "vek" => "19"
            ],
            [
                "name" => "Meno3",
                "vek" => "17"
            ]
        ];

        return view(
            "dashboard",
            [
                "users" => $users,
				"posts" => $posts->paginate(5),
            ]
        );
    }
}