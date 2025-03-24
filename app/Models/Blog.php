<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'kategori', 'status', 'content', 'thumbnail', 'published_at'];
    protected $dates = ['published_at'];
}
