<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'kategori', 'status', 'content', 'thumbnail', 'published_at'];
    protected $dates = ['published_at'];

    // Auto generate slug before creating
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = static::generateUniqueSlug($blog->judul);
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('judul')) {
                $blog->slug = static::generateUniqueSlug($blog->judul, $blog->id);
            }
        });
    }

    private static function generateUniqueSlug($title, $id = null)
    {
        $slug = Str::slug($title);
        $count = static::where('slug', $slug)->where('id', '!=', $id)->count();

        return $count ? "{$slug}-" . ($count + 1) : $slug;
    }
}
