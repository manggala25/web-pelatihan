<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('top_title'); // Kolom top_title
            $table->string('heading'); // Kolom heading
            $table->longText('content'); // Kolom content (longtext)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengurus');
    }
}
