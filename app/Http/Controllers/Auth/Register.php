<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5',
        ]);

        $user = User::Create([
           'name' => $validate['name'],
           'email' => $validate['email'],
           'password' => Hash::make($validate['password']),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard',['user' => '$user']);
    }
}
