<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'section';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'title',
        'heading',
        'content',
        'image',
        'video_url',
        'order',
        'layout_type',
    ];
}
