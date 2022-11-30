<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_libro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ISBN');
            $table->string('Titulo');
            $table->string('Autor');
            $table->string('No_paginas');
            $table->string('Editorial');
            $table->string('Email_editorial');
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
        Schema::dropIfExists('tb_libro');
    }
};
