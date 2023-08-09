<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function create()
{
    return view('incomes.create');
}

public function store(Request $request)
{
    $request->validate([
        'amount' => 'required|numeric',
        'description' => 'required|string',
        'date' => 'required|date',
        'category' => 'required|string',
    ]);

    Auth::user()->incomes()->create($request->all());

    return redirect()->route('incomes.index')->with('success', 'Income added successfully');
}

}
