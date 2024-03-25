<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffmanageController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('website.main', ['staff' => $staff]);
    }

    public function manage()
    {
        $staff = Staff::all();
        return view('backend.staffmanager', ['staff' => $staff]);
    }

    public function create()
    {
        return view('backend.Add.AddStaff');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'faculty' => 'required',
            'national_number' => 'required',
        ]);

        $staff = new Staff;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->faculty = $request->faculty;
        $staff->national_number = $request->national_number;

        $staff->save();

        return redirect()->route('staff.index')->with('success', 'Staff member created successfully.');
    }
}