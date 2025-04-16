<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Legalitas;

class LegalitasSeeder extends Seeder
{
    public function run()
    {
        Legalitas::create([
            'top_title' => 'Legalitas',
            'heading' => 'Legalitas',
            'content' => 'Kami memiliki Legalitas...'
        ]);
    }
}
