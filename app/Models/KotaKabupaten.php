<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KotaKabupaten extends Model
{
    use HasFactory;

    protected $table = 'kota_kabupaten';

    protected $fillable = [
        'kode_provinsi',
        'kode_kabkota',
        'nama_kabkota',
    ];

    
}
