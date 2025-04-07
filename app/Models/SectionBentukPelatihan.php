<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectionBentukPelatihan extends Model
{
    use HasFactory;

    protected $table = 'section_bentuk_pelatihan';

    protected $fillable = [
        'title_top',
        'heading',
        'deskripsi',
    ];
}
