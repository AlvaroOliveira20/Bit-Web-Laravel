<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('home');
    }
    public function homePage(){
        
        return view('homePage');
    }
}
