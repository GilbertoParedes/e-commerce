<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeseable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deseable', function (Blueprint $table) {
            $table->increments('pk_deseable');
            $table->bigInteger('usuario_id')->unsigned();
            $table->integer('producto_id')->unsigned();

            /***relacion foranea de usuario***/
            $table->foreign('usuario_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');


             /***relacion foranea de producto***/
            $table->foreign('producto_id')
            ->references('pk_producto')
            ->on('producto')
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
        Schema::dropIfExists('deseable');
    }
}