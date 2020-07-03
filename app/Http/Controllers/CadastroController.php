<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
class CadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }

    public function cadastrar(Request $request){
        $request->validate([
            'cpf'   =>      'required',
            'senha'   =>      'required',
            'email'   =>      'required',
            'name'   =>      'required',
        ]);
        $request->senha = md5($request->senha);
        usuario::create($request->all());

        return redirect()->route('login')->with('sucess', 'Cadastrado com sucesso! faça login para acessar');
    }
}
