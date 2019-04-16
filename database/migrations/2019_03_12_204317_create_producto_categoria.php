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
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->timestamps();

            /***relacion foranea de producto***/
            $table->foreign('producto_id')
            ->references('id')
            ->on('product')
            ->onDelete('cascade');

            /***relacion foranea de producto***/
            $table->foreign('categoria_id')
            ->references('id')
            ->on('category')
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
