<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio; // Pastikan modelnya ada
use App\Models\KategoriTema;

class FrontGaleriController extends Controller
{
  public function index()
  {
    $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
      ->withCount(['pelatihan as jumlah'])
      ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination

    $portofolio = Portofolio::latest()->paginate(6);
    return view('frontend.galeri', compact('portofolio' , 'kategori_tema'));
  }

  public function show($slug)
  {
    $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
      ->withCount(['pelatihan as jumlah'])
      ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination  
      
    $portofolio = Portofolio::where('slug', $slug)->firstOrFail(); // Ambil data berdasarkan slug

    return view('frontend.detail-galeri', compact('portofolio', 'kategori_tema')); // Pastikan view detail tersedia
  }
}
