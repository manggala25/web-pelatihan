<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BentukPelatihan extends Model
{
    use HasFactory;

    protected $table = 'bentuk_pelatihan'; // Nama tabel

    protected $fillable = [
        'nama_bentuk_pelatihan',
        'image',
        'status',
    ];
}
