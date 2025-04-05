<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio; // Pastikan modelnya ada
use App\Models\KategoriTema;
use App\Models\Kontak;

class FrontGaleriController extends Controller
{
  public function index()
  {
    $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
      ->withCount(['pelatihan as jumlah'])
      ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination

    $portofolio = Portofolio::latest()->paginate(6);

    // Kontak
    $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

    return view('frontend.galeri', compact('portofolio' , 'kategori_tema', 'kontak'));
  }

  public function show($slug)
  {
    $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
      ->withCount(['pelatihan as jumlah'])
      ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination  
      
    $portofolio = Portofolio::where('slug', $slug)->firstOrFail(); // Ambil data berdasarkan slug

    // Kontak
    $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

    return view('frontend.detail-galeri', compact('portofolio', 'kategori_tema', 'kontak')); // Pastikan view detail tersedia
  }
}
