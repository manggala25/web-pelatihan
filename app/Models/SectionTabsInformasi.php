<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTabsInformasi extends Model
{
    use HasFactory;

    protected $table = 'section_tabs_informasi';

    protected $fillable = ['top_title', 'heading'];
}
