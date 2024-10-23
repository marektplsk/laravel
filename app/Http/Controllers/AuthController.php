<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register'); 
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|string|email|max:200|unique:users', 
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'No napis mi sem tvoje meno',
            'email.required' => 'Povedz si',
            'email.email' => 'Musi mar spravny format moree',
            'email.unique' => 'kokoktko, toto uz je :D',
            'password.required' => 'Kde je heslo?',
            'password.min' => 'no minimalne 8 chars jaaaj',
            'password.confirmed' => 'je to ppopicii nematchuju sa',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Account created uspesne !');
    }

    public function showLoginForm() 
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); 

        if (Auth::attempt($credentials)) {
            return redirect('/profile')->with('success', 'Si prihlaseny :D!');
        }

        return redirect()->back()->withErrors('Nespravne Credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Odhlaseny uspesne moree!.');
    }

    public function showProfile()
    {
        return view('auth.profile');
    }
}
