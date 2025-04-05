<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';
    protected $fillable = [
        'nama_pic',
        'okupasi',
        'nama_lembaga',
        'content',
        'image',
    ];
}
