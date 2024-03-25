<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::all();
        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'conference_id' => 'required|exists:conferences,id',
            'speaker_id' => 'required|exists:speakers,id',
        ]);

        Session::create($validatedData);

        return redirect()->route('sessions.index')
                         ->with('success', 'Session created successfully');
    }


}
