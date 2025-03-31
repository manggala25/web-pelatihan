<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NamaPelatihan extends Model
{
    use HasFactory;

    protected $table = 'nama_pelatihan';

    protected $fillable = [
        'nama_pelatihan',
        'slug',
        'content',
        'nama_kategori',
        'status',
    ];

    // Buat slug otomatis sebelum menyimpan
    public static function boot()
    {
        parent::boot();

        static::creating(function ($pelatihan) {
            $pelatihan->slug = Str::slug($pelatihan->nama_pelatihan);
        });
    }
}
