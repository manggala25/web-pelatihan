<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\KategoriTema;
use App\Models\Kontak;
use App\Models\Banner;
use App\Models\InformasiPendaftaran;
use App\Models\JadwalPelatihan;
use App\Models\TabsInformasi;
use App\Models\SectionTabsInformasi;
use App\Models\BannerKontak;
use App\Models\Asset;

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
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat', 'jam operasional'])->get();

        $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

        $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->first(); // hanya 1 data terbaru

        $start = Carbon::now()->startOfMonth(); // Awal bulan ini
        $end = Carbon::now()->addMonths(4)->endOfMonth(); // Akhir bulan ke-4 dari sekarang

        $jadwals = JadwalPelatihan::whereBetween('waktu', [$start, $end])
            ->orderBy('waktu')
            ->get();

        $grouped = $jadwals->groupBy(function ($item) {
            return Carbon::parse($item->waktu)->translatedFormat('F Y'); // Misal: "Januari 2025"
        });

        // Ambil 3 data terakhir dari tabel tabs_informasi
        $tabs = TabsInformasi::orderBy('created_at', 'desc')->take(3)->get();

        // Ambil satu data terbaru dari tabel banner_kontak
        $bannerKontak = BannerKontak::orderBy('updated_at', 'desc')->first();

        $sectiontabsinformasi = SectionTabsInformasi::orderBy('updated_at', 'desc')->first();

        $asset = Asset::latest('updated_at')->first();

        $showNamaTempat = $jadwals->contains(fn($j) => !empty($j->nama_tempat));

        return view('frontend.jadwal-pelatihan', compact('kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'grouped', 'tabs', 'bannerKontak', 'sectiontabsinformasi', 'asset', 'showNamaTempat'));    
    }
}
