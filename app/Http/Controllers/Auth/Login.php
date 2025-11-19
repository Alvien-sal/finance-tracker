<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $validate = $request->validate([
            // 'name' => 'required|string|unique:users|max:255',
            'email' => 'required',
            'password' => 'required|min:5',
        ]);


        if(Auth::attempt($validate)){

            $request->session()->regenerate();

            return redirect()->intended('/');

        }

        return redirect()->route('dashboard');
    }
}
