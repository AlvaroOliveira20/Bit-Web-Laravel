<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('home');
    }
    public function homePage(){
        if(session('message'))
            return view('homePage');
        else
            return redirect()->route('login')->with('erro', 'É preciso fazer login para acessar essa página');
    }
}
