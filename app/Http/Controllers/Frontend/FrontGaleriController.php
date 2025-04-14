<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio; // Pastikan modelnya ada
use App\Models\KategoriTema;
use App\Models\Kontak;
use App\Models\Banner;
use App\Models\InformasiPendaftaran;
use App\Models\TabsInformasi;
use App\Models\BannerKontak;

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

    $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

    $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->first(); // hanya 1 data terbaru

    // Ambil 3 data terakhir dari tabel tabs_informasi
    $tabs = TabsInformasi::orderBy('created_at', 'desc')->take(3)->get();

    // Ambil satu data terbaru dari tabel banner_kontak
    $bannerKontak = BannerKontak::orderBy('updated_at', 'desc')->first();

    return view('frontend.galeri', compact('portofolio' , 'kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'bannerKontak', 'tabs'));
  }

  public function show($slug)
  {
    $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
      ->withCount(['pelatihan as jumlah'])
      ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination  
      
    $portofolio = Portofolio::where('slug', $slug)->firstOrFail(); // Ambil data berdasarkan slug

    // Kontak
    $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

    $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

    // Ambil 3 data terakhir dari tabel tabs_informasi
    $tabs = TabsInformasi::orderBy('created_at', 'desc')->take(3)->get();

    $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->first(); // hanya 1 data terbaru

    return view('frontend.detail-galeri', compact('portofolio', 'kategori_tema', 'kontak', 'latestBanner', 'tabs', 'informasipendaftaran')); // Pastikan view detail tersedia
  }
}
