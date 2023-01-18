<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function createUser(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:4'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created are logged in');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login')->with('message', 'You have been logged out!');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return redirect()->back()->withErrors(['message' => 'Invalid login credentials. Please try again.']);
    }
}
