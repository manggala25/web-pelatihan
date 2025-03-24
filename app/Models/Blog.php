<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'content', 'thumbnail', 'kategori', 'status', 'published_at'];

    protected $dates = ['published_at'];
}
