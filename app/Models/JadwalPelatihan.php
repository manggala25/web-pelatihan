<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPelatihan extends Model
{
    protected $table = 'jadwal_pelatihan';

    protected $fillable = [
        'waktu',
        'lokasi',
        // atau tambahkan 'hari', 'tanggal', 'bulan', 'tahun' jika kamu pecah fieldnya
    ];
}
