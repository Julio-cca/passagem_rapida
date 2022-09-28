<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\SiteCotacao;

class HomeController extends Controller
{
    public function home(){  

        $dt = new \DateTime();
		$dt->format('y-m-d');
        $dia = SiteCotacao::wheredate('created_at', $dt)->get();

        return view('app.home',['cotacao' => $dia]);
    }
}
