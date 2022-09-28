<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppUsuario;

class UsuarioController extends Controller
{
    public function usuario(){
        $usuario = AppUsuario::all();
        return view('app.usuario',['usuario' =>$usuario]);
    }

    public function C_usuario(){
        return view('app.cadastro_usuario');
    }

    public function CadastraUsuario(request $request){

        $request->validate([
            'nome_usuario' => 'min:3|max:50',
            'senha' => 'min:3|max:50',
            'permissao' => 'min:1|max:1',
            
        ]);

        AppUsuario::create(['nome_usuario' => $request->input('nome_usuario'), 
                            'senha' => $request->input('senha'),
                            'permissao' => $request->input('permissao')
        ]);

        return $this->usuario();

    }

    public function ExcluirUsuario(request $request){
       AppUsuario::where('id', $_GET['id'])->delete();   
       return $this->usuario(); 
    }
}
