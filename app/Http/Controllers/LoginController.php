<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authUser(Request $request){

        echo $request;

        return redirect('/dashboard')->with('success', 'You have been logged out.');

    }
}
