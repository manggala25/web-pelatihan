<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('portofolio', function (Blueprint $table) {
            $table->id();
            $table->string('judul_portofolio');
            $table->string('nama_klien');
            $table->longText('content');
            $table->string('kategori_tema');
            $table->string('nama_pelatihan');
            $table->date('waktu_awal');
            $table->date('waktu_akhir');
            $table->string('nama_tempat');
            $table->string('kota_kabupaten');
            $table->string('provinsi');
            $table->string('thumbnail')->nullable(); // Path gambar
            $table->string('cover')->nullable(); // Path gambar
            $table->string('link_klien')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('portofolio');
    }
};
