<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppUsuario;

class LoginController extends Controller
{
    public function login(){        
        return view('site.login');
    }

    public function valida_login(request $request){

        $request->validate([
            'usuario' => 'required',
            'senha' =>'required'
        ]);

        $usuario = AppUsuario::where('nome_usuario', $request->input('usuario'))->where('senha', $request->input('senha'))->get()->first();
        
        
        if(isset($usuario->nome_usuario) && $usuario->nome_usuario <> ''){
            session_start();
            $_SESSION['autenticado'] = 'sim';
            $_SESSION['permissao'] = $usuario->permissao;
            $_SESSION['nome_usuario'] = $usuario->nome_usuario;
            return redirect()->route('app.home');
        }else{
            return redirect()->route('site.login',['erro' => '2']);
        }
    }

    public function sair(){

        session_start();
        session_destroy();
        return redirect()->route('site.principal');
    }
}
