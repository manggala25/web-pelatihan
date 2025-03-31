<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('nama_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatihan')->unique();
            $table->string('slug')->unique();
            $table->longText('content');
            $table->string('nama_kategori');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nama_pelatihan');
    }
};
