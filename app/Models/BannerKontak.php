<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerKontak extends Model
{
    use HasFactory;

    protected $table = 'banner_kontak';

    protected $fillable = ['text', 'image'];
}
