<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NamaPelatihan;
use App\Models\KategoriTema;
use App\Models\Kontak;
use App\Models\Banner;
use App\Models\InformasiPendaftaran;
use App\Models\TabsInformasi;
use App\Models\BannerKontak;


class FrontTemaPelatihanController extends Controller
{
    public function index()
    {
        $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
            ->withCount(['pelatihan as jumlah'])
            ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

        $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->first(); // hanya 1 data terbaru

        // Ambil 3 data terakhir dari tabel tabs_informasi
        $tabs = TabsInformasi::orderBy('created_at', 'desc')->take(3)->get();

        // Ambil satu data terbaru dari tabel banner_kontak
        $bannerKontak = BannerKontak::orderBy('updated_at', 'desc')->first();

        return view('frontend.tema-pelatihan', compact('kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'tabs', 'bannerKontak'));
    }


    public function showKategoriTema($slug)
    {
        $kategori = KategoriTema::where('slug', $slug)->firstOrFail();
        $pelatihan = NamaPelatihan::where('nama_kategori', $kategori->nama_kategori)
            ->select('id', 'nama_pelatihan', 'slug', 'nama_kategori')
            ->get();

        $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
            ->withCount(['pelatihan as jumlah'])
            ->get(); // Pastikan ada

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

        $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->first(); // hanya 1 data terbaru

        // Ambil 3 data terakhir dari tabel tabs_informasi
        $tabs = TabsInformasi::orderBy('created_at', 'desc')->take(3)->get();

        // Ambil satu data terbaru dari tabel banner_kontak
        $bannerKontak = BannerKontak::orderBy('updated_at', 'desc')->first();

        return view('frontend.kategori-tema-pelatihan', compact('kategori', 'pelatihan', 'kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'tabs', 'bannerKontak'));
    }


    public function showPelatihan($slug)
    {
        $nama_pelatihan = NamaPelatihan::where('slug', $slug)->firstOrFail();
        $kategori_list = KategoriTema::select('nama_kategori', 'slug')->get();
        $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
            ->withCount(['pelatihan as jumlah'])
            ->get(); // Pastikan ada

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

        $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->first(); // hanya 1 data terbaru

        // Ambil 3 data terakhir dari tabel tabs_informasi
        $tabs = TabsInformasi::orderBy('created_at', 'desc')->take(3)->get();

        // Ambil satu data terbaru dari tabel banner_kontak
        $bannerKontak = BannerKontak::orderBy('updated_at', 'desc')->first();

        return view('frontend.detail-pelatihan', compact('nama_pelatihan', 'kategori_list', 'kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'tabs', 'bannerKontak'));
    }

    public function cariPelatihan(Request $request)
    {
        $query = $request->input('query');

        // Ambil pelatihan berdasarkan pencarian nama_pelatihan
        $pelatihan = NamaPelatihan::where('nama_pelatihan', 'LIKE', "%{$query}%")->get();

        return response()->json($pelatihan);
    }
}
