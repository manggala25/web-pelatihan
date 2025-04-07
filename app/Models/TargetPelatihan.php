<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetPelatihan extends Model
{
    use HasFactory;

    protected $table = 'target_pelatihan'; // Nama tabel
    protected $fillable = ['top_title', 'heading', 'content', 'image_front', 'image_back']; // Kolom yang dapat diisi
}
