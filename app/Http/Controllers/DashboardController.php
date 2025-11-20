<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\OneTimeExpense;



class DashboardController extends Controller
{
    
    public function index (){

        $expenses = Auth::user()->oneTimeExpenses()->get();

        $role = Auth::user()->role()->get();


        return view("dashboard", ['user' => Auth::user(), "expenses" => $expenses, 'role' => $role->first()->role ]);


    }
}
