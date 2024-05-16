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

    public function store() {

        $validatedUserData = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'password' => ['required', Password::min(5)]

        ]);

        $user = User::create($validatedUserData);


        Auth::login($user);

        return redirect('/cars');
    }

    public function index() {
        $users = User::all();
        return view('auth.dashboard', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('auth.edit-user', ['user' => $user]);

    }

    public function update(User $user, $id)
    {
        $validatedUserData = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],

        ]);


        $user = User::findOrFail($id);

        $user->update($validatedUserData);
        return redirect('/users');
    }

    public function destroy(User $user, $id)
    {
        $user = User::findOrFail($id)->delete();
        return redirect('/users');
    }
}
