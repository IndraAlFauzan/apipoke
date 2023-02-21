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
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');

          /* We started adding code here*/

            $table->string('title');  // Title of our blog post  
            $table->unsignedBigInteger('id_kategori_barang');        
            $table->foreign('id_kategori_barang')->references('id_kategori_barang')->on('kategori_barang')->onDelete('cascade');   
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
        //
    }
};
