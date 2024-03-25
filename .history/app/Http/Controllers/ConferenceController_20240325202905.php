<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ConferenceController extends Controller
{
    public function index()
    {
        try {
            $conferences = Conference::all();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }


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

        Conference::create($validatedData);

        return redirect()->route('conferences.')
                         ->with('success', 'Conference created successfully');
    }

}
