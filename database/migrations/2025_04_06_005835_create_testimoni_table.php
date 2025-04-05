<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama_pic'); // Kolom nama_pic
            $table->string('okupasi'); // Kolom okupasi
            $table->string('nama_lembaga'); // Kolom nama_lembaga
            $table->longText('content'); // Kolom content
            $table->string('image'); // Kolom image
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimoni');
    }
}