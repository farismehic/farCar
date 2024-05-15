<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function login() {
        return view('users.login');
    }

    public function create() {
        return view('auth.register');

    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'confirmed', Password::min(5)]

        ]);

    
        $user = User::create($data);
        Auth::login($user);

        return redirect('/cars');
    }
}
