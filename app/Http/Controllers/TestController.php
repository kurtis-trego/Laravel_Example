<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create() 
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|max:100',
            'lastName' => 'required|max:100',
            'fare' => 'required|gte:50',
            'company' => 'required|max:100',
            'accountNumber' => 'required|max:7',
            'fareDate' => 'required|date|after_or_equal:today',
            'pickupTime' => 'required|max:4',
            'pickupCity' => 'required|max:100',
            'pickupState' => 'required|max:100',
        ]);
        \App\Form::create($validatedData);
 
        return response()->json('Form is successfully validated and data has been saved');
    }
}
