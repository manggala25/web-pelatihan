<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TujuanLembaga extends Model
{
    use HasFactory;

    protected $table = 'tujuan_lembaga';

    protected $fillable = [
        'title_top',
        'heading',
        'deskripsi',
    ];
}
