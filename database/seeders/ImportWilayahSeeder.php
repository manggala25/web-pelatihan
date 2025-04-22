<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportWilayahSeeder extends Seeder
{
    public function run()
    {
        // Ambil dan jalankan isi file provinsi.sql
        $provinsiPath = database_path('sql/provinsi.sql');
        $provinsiSql = File::get($provinsiPath);
        DB::unprepared($provinsiSql);
        $this->command->info('Data provinsi berhasil dimasukkan.');

        // Ambil dan jalankan isi file kota_kabupaten.sql
        $kotaPath = database_path('sql/kota_kabupaten.sql');
        $kotaSql = File::get($kotaPath);
        DB::unprepared($kotaSql);
        $this->command->info('Data kota/kabupaten berhasil dimasukkan.');
    }
}
