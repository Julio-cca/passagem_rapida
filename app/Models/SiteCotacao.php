<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCotacao extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'telefone', 'partida', 'destino', 'qtdpassageiros','estado'];

}


