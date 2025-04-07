<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_pelatihan', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('top_title'); // Kolom top_title
            $table->string('heading'); // Kolom heading
            $table->longText('content'); // Kolom content
            $table->string('image_front'); // Kolom image_front
            $table->string('image_back'); // Kolom image_back
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
        Schema::dropIfExists('target_pelatihan');
    }
}
