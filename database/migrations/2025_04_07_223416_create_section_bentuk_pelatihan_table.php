<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionBentukPelatihanTable extends Migration
{
    public function up()
    {
        Schema::create('section_bentuk_pelatihan', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('top_title'); // Kolom top_title
            $table->string('heading'); // Kolom heading
            $table->text('deskripsi'); // Kolom deskripsi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_bentuk_pelatihan');
    }
}
