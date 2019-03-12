<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_categoria', function (Blueprint $table) {
            $table->increments('pk_producto_categoria');
            $table->integer('producto_id')->unsigned();
            $table->integer('categoria_id')->unsigned();

            /***relacion foranea de producto***/
            $table->foreign('producto_id')
            ->references('pk_producto')
            ->on('producto')
            ->onDelete('cascade');

            /***relacion foranea de producto***/
            $table->foreign('categoria_id')
            ->references('pk_categoria')
            ->on('categoria')
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
        Schema::dropIfExists('producto_categoria');
    }
}
