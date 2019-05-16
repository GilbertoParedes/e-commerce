<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_pay',30);
            $table->string('cardholder',60);
            $table->integer('card_number');
            $table->integer('month');
            $table->integer('year');
            $table->integer('comprar_ahora_id')->unsigned();

            $table->foreign('comprar_ahora_id')
            ->references('id')
            ->on('comprar_ahora')
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
        Schema::dropIfExists('pago');
    }
}