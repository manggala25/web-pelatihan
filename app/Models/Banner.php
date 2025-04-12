<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners'; // Nama tabel (opsional kalau sesuai konvensi)

    protected $fillable = ['gambar']; // Kolom yang bisa diisi secara massal
}
