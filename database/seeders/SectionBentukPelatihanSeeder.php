<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SectionBentukPelatihan;

class SectionBentukPelatihanSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data contoh ke tabel section_bentuk_pelatihan
        SectionBentukPelatihan::create([
            'top_title' => 'Bentuk Pelatihan 1',
            'heading' => 'Bentuk Pelatihan 1',
            'deskripsi' => 'Deskripsi untuk bentuk pelatihan 1.',
        ]);
    }
}
