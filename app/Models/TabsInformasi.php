<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabsInformasi extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'tabs_informasi';

    // Tentukan kolom yang dapat diisi massal
    protected $fillable = [
        'nama_tabs',
        'content',
    ];

}
