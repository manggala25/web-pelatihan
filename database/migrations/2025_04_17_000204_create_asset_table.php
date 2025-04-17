<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('logo_reguler'); // Kolom logo_reguler
            $table->string('logo_dark')->nullable(); // Kolom logo_dark, nullable
            $table->string('logo_light')->nullable(); // Kolom logo_light, nullable
            $table->text('motto'); // Kolom motto, tipe text
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
        Schema::dropIfExists('asset');
    }
}
