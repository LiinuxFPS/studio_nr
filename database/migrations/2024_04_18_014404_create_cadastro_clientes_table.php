<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo', 100);
            $table->date('data_nascimento');
            $table->string('profissao', 50);
            $table->string('sexo', 1);
            $table->string('telefone', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_clientes');
    }
}