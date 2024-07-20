<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //muestra la pantalla principal
    public function __invoke()
    {
        return view('home');
    }
    
}
