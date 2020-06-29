<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->integer('administrador_id')->unsigned();
            $table->integer('funcionario_id')->unsigned();
            $table->string('nm_produto');
            $table->string('tipo_produto');
            $table->string('qt_itens');
            $table->timestamps();
            $table->foreign('administrador_id')->references('id')->on('administradors');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
