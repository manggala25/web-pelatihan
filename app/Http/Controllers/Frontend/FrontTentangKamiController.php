<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profil;
use App\Models\VisiMisi;
use App\Models\TujuanLembaga;
use App\Models\NamaPelatihan;
use App\Models\KategoriTema;

class FrontTentangKamiController extends Controller
{
    public function index()
    {
        // Ambil 1 profil terakhir yang diperbarui
        $profil = Profil::latest('updated_at')->first();

        // Ambil 1 visi misi terakhir yang diperbarui
        $visimisi = VisiMisi::latest('updated_at')->first();

        return view('frontend.tentang-kami', compact('profil', 'visimisi'));
    }

    public function visiMisi() // Ubah dari visi-misi ke visiMisi
    {
        $visimisi = VisiMisi::latest('updated_at')->first();

        $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
            ->withCount(['pelatihan as jumlah'])
            ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination

        return view('frontend.visi-misi', compact('visimisi', 'kategori_tema'));
    }

    public function tujuanLembaga()
    {
        $tujuanlembaga = TujuanLembaga::latest('updated_at')->first();

        $kategori_tema = KategoriTema::select('id', 'nama_kategori', 'slug')
            ->withCount(['pelatihan as jumlah'])
            ->paginate(10); // Pastikan pakai get() kalau tidak butuh pagination

        return view('frontend.tujuan-lembaga', compact('tujuanlembaga', 'kategori_tema'));
    }

    public function cariPelatihan(Request $request)
    {
        $query = $request->input('query');

        // Ambil pelatihan berdasarkan pencarian nama_pelatihan
        $pelatihan = NamaPelatihan::where('nama_pelatihan', 'LIKE', "%{$query}%")->get();

        return response()->json($pelatihan);
    }
}
