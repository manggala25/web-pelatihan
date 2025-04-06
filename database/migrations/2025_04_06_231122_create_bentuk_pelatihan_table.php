<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBentukPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bentuk_pelatihan', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama_bentuk_pelatihan'); // Kolom nama_bentuk_pelatihan
            $table->string('image')->nullable(); // Kolom image, nullable jika tidak ada gambar
            $table->enum('status', ['aktif', 'nonaktif']); // Kolom status
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
        Schema::dropIfExists('bentuk_pelatihan');
    }
}
