<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('tipo');
            $table->mediumText('mensaje');
            $table->bigInteger('usuario_id')->unsigned();
            $table->integer('carrito_id')->unsigned();

            /***relacion foranea de carrito***/
            $table->foreign('carrito_id')
            ->references('id')
            ->on('carrito')
            ->onDelete('cascade');
            
             /***relacion foranea de producto***/
            $table->foreign('usuario_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('mensaje');
    }
}
