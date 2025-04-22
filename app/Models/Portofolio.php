<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\KotaKabupaten;
use App\Models\Provinsi;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolio';

    protected $fillable = [
        'judul_portofolio',
        'slug',
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
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($portofolio) {
            if (empty($portofolio->slug)) {
                $portofolio->slug = Str::slug($portofolio->judul_portofolio);
            }
        });

        static::updating(function ($portofolio) {
            $portofolio->slug = Str::slug($portofolio->judul_portofolio);
        });
    }

    // Relasi ke tabel Provinsi
    public function provinsiData()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi', 'kode_provinsi');
    }

    // Relasi ke tabel Kota
    public function kotaData()
    {
        return $this->belongsTo(KotaKabupaten::class, 'kota_kabupaten', 'kode_kabkota');
    }
}
