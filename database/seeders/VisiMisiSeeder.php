<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VisiMisi;

class VisiMisiSeeder extends Seeder
{
    public function run(): void
    {
        VisiMisi::create([
            'title_top' => 'Selamat Datang di Perusahaan Kami',
            'heading' => 'Kami adalah tim yang berdedikasi untuk layanan terbaik',
            'visi' => 'Kami telah berdiri sejak tahun 2020 dan terus berkembang untuk memberikan layanan terbaik kepada pelanggan kami.',
            'misi' => 'Misi kami adalah untuk memberikan layanan terbaik kepada.',
        ]);
    }
}
