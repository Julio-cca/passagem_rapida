<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AppUsuario;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       AppUsuario::create(['nome_usuario' => 'Admin', 'senha' => 'admin202209', 'permissao' => 1] );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        AppUsuario::where('nome_usuario', 'Admin')->delete();
    }
};
