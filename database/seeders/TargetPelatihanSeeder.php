<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TargetPelatihan;

class TargetPelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa data dummy ke tabel target_pelatihan
        TargetPelatihan::create([
            'top_title' => 'Target Pelatihan',
            'heading' => 'Target atau Sasaran Pelatihan',
            'content' => 'Pelatihan ini mencakup dasar-dasar pemrograman menggunakan bahasa pemrograman populer.',
            'image_front' => 'images/pelatihan_dasar_front.jpg',
            'image_back' => 'images/pelatihan_dasar_back.jpg',
        ]);

    }
}
