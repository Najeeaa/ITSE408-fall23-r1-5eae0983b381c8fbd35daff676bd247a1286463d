<?php

namespace App\Http\Controllers;
use App\Models\Conferences;

use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferences = Conferences::all();
        return view('Conferences.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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








