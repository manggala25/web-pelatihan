<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabsInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabs_informasi', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama_tabs'); // Kolom nama_tabs
            $table->longText('content'); // Kolom content menggunakan LONGTEXT
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
        Schema::dropIfExists('tabs_informasi');
    }
}
