<?php

namespace App\Http\Controllers;
use App\Models\announcements;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class announcement extends Controller
{
    public function index(){

        $announcement=new announcements([
               'Name'=>'لقاء',
               'Status'=>'مفعل',
                'details'=>'مثال تجريبي',
        ]);
        $announcement->save();

        dump(announcements::all());

        return view('website.main',[
            'announcement' => announcements::all()
        ]);

    }
}
