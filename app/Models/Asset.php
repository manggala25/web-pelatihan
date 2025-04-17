<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = 'asset';
    protected $fillable = [
        'logo_reguler',
        'logo_dark',
        'logo_light',
        'motto',
    ];
}
