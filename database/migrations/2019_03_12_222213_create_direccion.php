<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('pk_direccion');
            $table->string('pais',15);
            $table->string('estado',15);
            $table->string('municipio',15);
            $table->string('calle',30);
            $table->string('colonia',15);
            $table->string('cp',5);
            $table->string('telefono',11);
            $table->integer('numero');
            $table->bigInteger('usuario_id')->unsigned();

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
        Schema::dropIfExists('direccion');
    }
}
