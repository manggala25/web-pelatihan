<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legalitas extends Model
{
    use HasFactory;

    protected $table = 'legalitas';
    protected $fillable = [
        'top_title',
        'heading',
        'content',
    ];
}
