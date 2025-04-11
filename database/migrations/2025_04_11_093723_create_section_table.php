<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTable extends Migration
{
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('title'); // Nama section
            $table->string('heading'); // Heading section
            $table->text('content')->nullable(); // Konten section
            $table->string('image')->nullable(); // Kolom untuk menyimpan path gambar (jika di-upload)
            $table->string('video_url')->nullable(); // Kolom untuk menyimpan URL video
            $table->integer('order')->default(0); // Urutan section
            $table->string('layout_type'); // Jenis layout (1, 2, atau 3)
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('section');
    }
}