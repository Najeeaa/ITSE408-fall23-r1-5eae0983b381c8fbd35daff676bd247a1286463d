<?php

namespace App\Http\Controllers;
use App\Models\announcements;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\News;


class MainPageContrller extends Controller
{

    public function main()
    {
        $names =
        [
            [
                'name' => 'ali',
                'age' => 20
            ],
            [
                'name' => 'mohamed',
                'age' => 30
            ]
        ];

        $faculties = Faculty::all();
        $news = News::all();


     return view('website.main', [ 'list' => $names,
     'announcement' => announcements::all() , 'faculties' => $faculties, 'news' => $news] );

    }


}
