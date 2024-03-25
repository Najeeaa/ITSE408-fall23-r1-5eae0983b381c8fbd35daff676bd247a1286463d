<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingSystemContraoller extends Controller
{
    public function index() {
        return view('backend.tracking_system_home');
    }
}
