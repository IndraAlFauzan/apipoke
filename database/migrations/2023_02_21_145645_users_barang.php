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
        Schema::create('users_barang', function (Blueprint $table) {
            $table->id('id_users_barang');
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('id_barang');
            $table->timestamps();

            $table->foreign('uid')->references('uid')->on('users');
            $table->foreign('id_barang')->references('id_barang')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_courses');
    }
};
