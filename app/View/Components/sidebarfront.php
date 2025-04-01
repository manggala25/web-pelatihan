<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebarfront extends Component
{
    public $kategoriTema; // Variabel props

    /**
     * Buat constructor untuk menerima data kategori
     */
    public function __construct($kategoriTema)
    {
        $this->kategoriTema = $kategoriTema;
    }

    /**
     * Render view komponen
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebarfront');
    }
}

