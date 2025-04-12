<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\KategoriTema;
use App\Models\Kontak;
use App\Models\Banner;
use App\Models\InformasiPendaftaran;

class FrontJadwalPelatihanController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
            ->withCount(['pelatihan as jumlah'])
            ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

        $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->first(); // hanya 1 data terbaru

        return view('frontend.jadwal-pelatihan', compact('kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran'));
    }
}
