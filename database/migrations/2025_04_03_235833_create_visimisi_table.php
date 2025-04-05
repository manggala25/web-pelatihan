<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('visimisi', function (Blueprint $table) {
            $table->id();
            $table->string('title_top',);
            $table->string('heading',);
            $table->longText('visi');
            $table->longText('misi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visimisi');
    }
};
