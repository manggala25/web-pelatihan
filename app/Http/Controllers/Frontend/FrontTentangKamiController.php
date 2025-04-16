<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profil;
use App\Models\VisiMisi;
use App\Models\TujuanLembaga;
use App\Models\NamaPelatihan;
use App\Models\KategoriTema;
use App\Models\Kontak;
use App\Models\Testimoni;
use App\Models\Banner;
use App\Models\InformasiPendaftaran;
use App\Models\TabsInformasi;
use App\Models\SectionTabsInformasi;
use App\Models\BannerKontak;

class FrontTentangKamiController extends Controller
{
    public function index()
    {
        // Ambil 1 profil terakhir yang diperbarui
        $profil = Profil::latest('updated_at')->first();

        // Ambil 1 visi misi terakhir yang diperbarui
        $visimisi = VisiMisi::latest('updated_at')->first();

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        // Ambil Testimoni dari yg baru diupdate dan akif
        $testimoni = Testimoni::latest('updated_at', 'aktif')->get();

        $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru
        

        return view('frontend.tentang-kami', compact('profil', 'visimisi', 'kontak', 'testimoni', 'latestBanner'));
    }

    public function visiMisi() // Ubah dari visi-misi ke visiMisi
    {
        $visimisi = VisiMisi::latest('updated_at')->first();

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

        $sectiontabsinformasi = SectionTabsInformasi::orderBy('updated_at', 'desc')->first();


        return view('frontend.visi-misi', compact('visimisi', 'kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'tabs', 'bannerKontak', 'sectiontabsinformasi'));
    }

    public function tujuanLembaga()
    {
        $tujuanlembaga = TujuanLembaga::latest('updated_at')->first();

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

        $sectiontabsinformasi = SectionTabsInformasi::orderBy('updated_at', 'desc')->first();


        return view('frontend.tujuan-lembaga', compact('tujuanlembaga', 'kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'tabs', 'bannerKontak', 'sectiontabsinformasi'));
    }

    public function pengurus()
    {
        // $pengurus = Pengurus::latest('updated_at')->first();

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

        $sectiontabsinformasi = SectionTabsInformasi::orderBy('updated_at', 'desc')->first();


        return view('frontend.pengurus', compact( 'kategori_tema', 'kontak', 'latestBanner', 'informasipendaftaran', 'tabs', 'bannerKontak', 'sectiontabsinformasi'));
    }

    public function cariPelatihan(Request $request)
    {
        $query = $request->input('query');

        // Ambil pelatihan berdasarkan pencarian nama_pelatihan
        $pelatihan = NamaPelatihan::where('nama_pelatihan', 'LIKE', "%{$query}%")->get();

        return response()->json($pelatihan);
    }
}
