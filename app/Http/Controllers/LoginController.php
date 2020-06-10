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

        if ($request->cpf == "123.456.789-10" && $request->senha == "123456" ){
            session(['nome'=>'%display_name%', 'id'=>001]);
            return redirect()->route('homePage');
        }else 
            return redirect()->back()->with('erro', 'CPF ou senha incorretos');
    }
    //
    public function deslogar(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
        
    }
}
