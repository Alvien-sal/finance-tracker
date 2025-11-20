<?php

namespace App\Http\Controllers;

use App\Models\OneTimeExpense;
use Illuminate\Http\Request;
use App\Enum\CategoryExpense;
use Illuminate\Support\Facades\Auth;


class OneTimeExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view("expense.oneTime.create", ['cats' => CategoryExpense::cases()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => "required|string",
            'amount' => "required|numeric",
            'category' => "required"
        ]);

        $expense = OneTimeExpense::create([
            "name" => $validate['name'],
            "amount" => $validate['amount'],
            "category" => $validate['category'],
            "user_id" => Auth::user()->id
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(OneTimeExpense $oneTimeExpense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OneTimeExpense $oneTimeExpense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OneTimeExpense $oneTimeExpense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OneTimeExpense $oneTimeExpense)
    {
        //
    }
}
