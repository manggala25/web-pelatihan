<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::rename('tentang_kami', 'profil');
    }

    public function down(): void
    {
        Schema::rename('profil', 'tentang_kami');
    }
};
