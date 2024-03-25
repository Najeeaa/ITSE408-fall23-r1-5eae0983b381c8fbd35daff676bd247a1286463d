<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

  public function index()
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

   return view('website.main', [ 'list' => $names ] );

  }



}
