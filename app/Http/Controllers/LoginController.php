<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class LoginController extends Controller
{
    public function login(){
        if(session('nome')){
            return redirect()->route('homePage');
        }else{
            return view('login');
        }
    }
    public function logar(Request $request){
        $request->validate([
            'cpf'   =>      'required',
            'senha'   =>      'required',
        ]);
        
        $usuarios = usuario::all();
        foreach ($usuarios as $usuario){
            if ($request->cpf == $usuario->cpf && $request->senha == $usuario->senha ){
                session(['nome'=>$usuario->name, 'id'=>$usuario->id]);
                return redirect()->route('homePage')->with('message', 'Logado com sucesso!');
            }
        }
        return redirect()->back()->with('erro', 'CPF ou senha incorretos');
        
    }
    //
    public function deslogar(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
        
    }
    public function delete($id){
        usuario::destroy($id);
        return redirect()->route('homePage')->with('message', 'Sua conta foi apagada, sus sessão irá durar até você sair');
        
    }
}
