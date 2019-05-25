<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLetrasNumeros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letras_numeros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('letras');
            $table->mediumText('numeros');
            $table->bigInteger('usuario_id')->unsigned();
            $table->integer('carrito_producto_id')->unsigned();
            $table->integer('carrito_id')->unsigned();
            
            /***relacion foranea de producto***/
            $table->foreign('usuario_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            
            /***relacion foranea de carrito***/
            $table->foreign('carrito_producto_id')
            ->references('id')
            ->on('carrito_producto')
            ->onDelete('cascade');

            /***relacion foranea de carrito***/
            $table->foreign('carrito_id')
            ->references('id')
            ->on('carrito')
            ->onDelete('cascade');

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
        Schema::dropIfExists('letras_numeros');
    }
}
