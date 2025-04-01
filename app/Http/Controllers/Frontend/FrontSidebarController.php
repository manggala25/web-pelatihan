<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\KategoriTema;

class FrontSidebarController extends Controller
{
    public function index()
    {
        $kategori_list = KategoriTema::select('nama_kategori', 'slug')->get();

        dd($kategori_list); // Debugging
        return view('components.sidebarfront', compact('kategori_list'));
    }
}
