<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('portofolio', function (Blueprint $table) {
            $table->string('slug')->unique()->after('judul_portofolio');
        });
    }

    public function down()
    {
        Schema::table('portofolio', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
