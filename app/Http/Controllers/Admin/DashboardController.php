<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index (){

        $role = Auth::user()->role()->get();


        return view("admin.dashboard", ['user' => Auth::user(), 'role' => $role->first()->role ]);


    }
}
