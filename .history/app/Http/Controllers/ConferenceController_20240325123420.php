<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conferences::all();
        return view('conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        Conferences::create($validatedData);

        return redirect()->route('conferences.index')
                         ->with('success', 'Conference created successfully');
    }

}
