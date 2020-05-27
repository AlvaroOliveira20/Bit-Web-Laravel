<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }

    public function cadastrar(Request $request){
        $request->validate([
            'cpf'   =>      'required',
            'password'   =>      'required',
            'email'   =>      'required',
            'name'   =>      'required',
        ]);

        return redirect()->route('homePage')->with('message', 'ok');
    }
}
