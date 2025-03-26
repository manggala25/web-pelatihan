<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolio';

    protected $fillable = [
        'judul_portofolio',
        'nama_klien',
        'content',
        'kategori_tema',
        'nama_pelatihan',
        'waktu_awal',
        'waktu_akhir',
        'nama_tempat',
        'kota_kabupaten',
        'provinsi',
        'thumbnail',
        'cover',
        'link_klien',
        'status',
    ];
}
