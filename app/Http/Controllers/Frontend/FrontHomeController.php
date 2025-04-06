<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Profil;
use App\Models\Kontak;  
use App\Models\Blog;
use App\Models\BentukPelatihan;

class FrontHomeController extends Controller
{
    public function index()
    {
        // Ambil 1 profil terakhir yang diperbarui
        $profil = Profil::latest('updated_at')->first();

        // Ambil blog terbaru
        $blog = Blog::latest('created_at')->take(3)->get();

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        // Ambil semua bentuk pelatihan dari terlama dan status aktf
        $bentuk_pelatihan = BentukPelatihan::where('status', 'aktif')->latest('updated_at')->get();

        $portofolio = Portofolio::latest('updated_at')->get();
        return view('frontend.home', compact('portofolio', 'profil', 'blog', 'kontak', 'bentuk_pelatihan'));
    }
}
