<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    protected $table = 'visimisi'; // Nama tabel

    protected $fillable = [
        'title_top',
        'heading',
        'visi',
        'misi',
    ];
}
