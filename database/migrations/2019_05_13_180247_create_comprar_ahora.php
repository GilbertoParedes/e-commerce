<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprarAhora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprar_ahora', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titular');
            $table->string('facturacion');
            $table->integer('carrito_id')->unsigned();
            $table->integer('direccion_id')->unsigned();

            $table->timestamps();

            /***relacion foranea de carrito***/
            $table->foreign('carrito_id')
            ->references('id')
            ->on('carrito')
            ->onDelete('cascade');

            /***relacion foranea de direccion***/
            $table->foreign('direccion_id')
            ->references('id')
            ->on('direccion')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprar_ahora');
    }
}
