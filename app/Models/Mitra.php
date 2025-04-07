<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra'; // Nama tabel
    protected $fillable = ['nama_mitra', 'logo', 'status']; // Kolom yang dapat diisi
}
