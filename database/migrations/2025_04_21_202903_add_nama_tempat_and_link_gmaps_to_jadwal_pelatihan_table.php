<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaTempatAndLinkGmapsToJadwalPelatihanTable extends Migration
{
    public function up()
    {
        Schema::table('jadwal_pelatihan', function (Blueprint $table) {
            $table->string('nama_tempat')->after('lokasi')->nullable();
            $table->text('link_gmaps')->after('nama_tempat')->nullable();
        });
    }

    public function down()
    {
        Schema::table('jadwal_pelatihan', function (Blueprint $table) {
            $table->dropColumn(['nama_tempat', 'link_gmaps']);
        });
    }
}
