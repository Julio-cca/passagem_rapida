<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\SiteCotacao;

class CotacaoController extends Controller
{
    public function cotacao(){
        return view('app.cotacao');
    }

    public function SalvarCotacao(request $request){

        $request->validate([
            'nome' => 'min:3|max:50',
            'email' => 'email',
            'telefone' => 'required',
            'partida' => 'required',
            'destino' => 'required',
            'passageiro' => 'required',
        ]);

        SiteCotacao::create(['nome' => $request->input('nome'),'email' => $request->input('email'),'telefone' => $request->input('telefone'),
         'partida' => $request->input('partida'),'destino' => $request->input('destino'),'qtdpassageiros' => $request->input('passageiro'), 'estado' => 1]);
        
          return redirect()->route('site.principal',['sucesso' => 'sim']);
    } 

    public function ExibirCotacao(request $request){

        $cotacao = SiteCotacao::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->where('telefone', 'like', '%'.$request->input('telefone').'%')
            ->where('partida', 'like', '%'.$request->input('partida').'%')
            ->where('destino', 'like', '%'.$request->input('destino').'%')
            ->where('qtdpassageiros', 'like', '%'.$request->input('qtdpassageiros').'%')->get();            
            
            return view('app.cotacao',['cotacao' => $cotacao]);
        
    }
    public function ExcluirCotacao(request $request){
        $delete = SiteCotacao::where('id', $_GET['cotacao'])->delete();
        return view('app.cotacao');
    }

    public function atendimento(){

        SiteCotacao::where('id', $_GET['id'])->update(['estado' => 2]);
        return view('app.cotacao');
    }
}
