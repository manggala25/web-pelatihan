<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengurus;

class PengurusSeeder extends Seeder
{
    public function run()
    {
        Pengurus::create([
            'top_title' => 'Pengurus Utama',
            'heading' => 'Tim Pengurus Kami',
            'content' => 'Kami memiliki tim pengurus yang berpengalaman dan berdedikasi untuk mengelola program pelatihan. Mereka memiliki latar belakang yang kuat di bidang masing-masing dan siap membantu peserta mencapai tujuan mereka.'
        ]);

    }
}
