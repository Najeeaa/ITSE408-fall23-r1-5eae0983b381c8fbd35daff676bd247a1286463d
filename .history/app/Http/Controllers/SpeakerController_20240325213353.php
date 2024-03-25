<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();
        return view('speakers.index', compact('speakers'));
    }

    public function create()
    {
        return view('speakers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'photo' => 'required',
        ]);

        Speaker::create($validatedData);

        return redirect()->route('speakers.index')
                         ->with('success', 'Speaker created successfully');
    }

