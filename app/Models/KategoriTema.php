<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KategoriTema extends Model
{
    use HasFactory;

    protected $table = 'kategori_tema';

    protected $fillable = ['nama_kategori', 'slug', 'deskripsi', 'status'];

    // Set slug otomatis saat membuat kategori
    public static function boot()
    {
        parent::boot();

        static::creating(function ($kategori) {
            $kategori->slug = Str::slug($kategori->nama_kategori);
        });
    }

    public function pelatihan()
    {
        return $this->hasMany(NamaPelatihan::class, 'nama_kategori', 'nama_kategori');
    }
}
