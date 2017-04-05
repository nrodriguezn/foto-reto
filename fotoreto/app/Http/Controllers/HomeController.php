<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retornar a home con las fotos que participan en el foto reto que ya estan autorizadas
      //  $photos = photo::all(); //esto trae todas las fotos en la base de datos
        return view('home');
        //return view('home')->with(['photo' => $photos]);

    }
}
