<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_usuario',50);
            $table->string('senha',30);
            $table->string('permissao', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_usuarios');
    }
};
