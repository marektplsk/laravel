<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        // Define the users array
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
            'users' => $users
        ]); 
    }
}