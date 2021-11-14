<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteamersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steamers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('Name',50);
            $table->string('Username',50);
            $table->string('Email',50);
            $table->string('Phone',50);
            $table->string('Password',50);
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
        Schema::dropIfExists('steamers');
    }
}
