<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('sexo');
            $table->integer('edad');
            $table->date('aniversario')->nullable();
            $table->string('type_user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('path')->nullable();
            $table->string('stripe_id')->nullable()->collation('utf8mb4_bin');
            $table->string('card_brand')->nullable();
            $table->string('card_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
