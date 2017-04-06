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
            $table->increments('id');
            $table->integer('id_direction');
            $table->integer('id_user_type');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sex');
            $table->string('phone');
            $table->integer('user_puntuation');
            $table->string('urlImg_profile');
            $table->string('presentation');
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
