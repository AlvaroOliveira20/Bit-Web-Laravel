<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logar(Request $request){
        $request->validate([
            'cpf'   =>      'required',
            'senha'   =>      'required',
        ]);



        if ($request->cpf == "123.456.789.10" && $request->senha == "123456" )
            return redirect()->route('homePage')->with('message', 'ok');
        else
            return redirect()->back()->with('erro', 'CPF ou senha incorretos');
    }
    //
}
