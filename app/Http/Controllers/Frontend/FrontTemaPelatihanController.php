<?php

namespace App\Http\Controllers\Frontend;

use App\Models\NamaPelatihan;
use App\Models\KategoriTema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontTemaPelatihanController extends Controller
{
    public function index()
    {
        $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
            ->withCount(['pelatihan as jumlah'])
            ->paginate(10); // Tambahkan pagination

        return view('frontend.tema-pelatihan', compact('kategori_tema'));
    }

    public function showKategoriTema($slug)
    {
        // Ambil kategori berdasarkan slug
        $kategori = KategoriTema::where('slug', $slug)->firstOrFail();

        // Ambil pelatihan yang sesuai dengan kategori
        $pelatihan = NamaPelatihan::where('nama_kategori', $kategori->nama_kategori)
            ->select('id', 'nama_pelatihan', 'slug')
            ->get();

        return view('frontend.kategori-tema-pelatihan', compact('kategori', 'pelatihan'));
    }

    public function showPelatihan($slug)
    {
        $nama_pelatihan = NamaPelatihan::where('slug', $slug)->firstOrFail();

        return view('frontend.detail-pelatihan', compact('nama_pelatihan'));
    }
}
