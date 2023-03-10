<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Cria itens do Pedido
        Schema::create('ped_item', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_produtos');
            $table->string('cod_estabel');
            $table->string('id_pedido');
            $table->string('nome_cliente');
            $table->string('celular');
            $table->string('nome_produto');
            $table->string('descricao');
            $table->string('imagem')->nullable();
            $table->string('valor_unitario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Exclui itens do pedido
        Schema::dropIfExists('ped_item');
    }
}
