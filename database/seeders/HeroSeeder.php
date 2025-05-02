<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'top_title' => 'Selamat Datang di',
            'heading' => 'Pusat Studi Pengembangan Kompetensi',
            'paragraf' => 'Kami hadir untuk membantu pemerintah dan instansi terkait dalam mensosialisasikan regulasi, serta memperbaiki sistem pelayanan publik.',
            'background' => 'uploads/bg-hero.jpg', // Sesuaikan path jika ingin upload
        ]);
    }
}
