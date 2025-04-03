<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profil;
use App\Models\VisiMisi;
use App\Models\TujuanLembaga;

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

        return view('frontend.visi-misi', compact('visimisi'));
    }

    public function tujuanLembaga()
    {
        $tujuanlembaga = TujuanLembaga::latest('updated_at')->first();

        return view('frontend.tujuan-lembaga', compact('tujuanlembaga'));
    }
}
