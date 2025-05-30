<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Profil;
use App\Models\Kontak;  
use App\Models\Blog;
use App\Models\BentukPelatihan;
use App\Models\Mitra;
use App\Models\TargetPelatihan;
use App\Models\SectionBentukPelatihan;
use App\Models\Section;
use App\Models\Asset;
use App\Models\Hero;

class FrontHomeController extends Controller
{
    public function index()
    {
        // Ambil 1 profil terakhir yang diperbarui
        $profil = Profil::latest('updated_at')->first();

        // Ambil blog terbaru
        $blog = Blog::latest('created_at')->take(6)->get();

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat', 'jam operasional'])->get();

        // Ambil semua bentuk pelatihan dari terlama dan status aktf
        $bentuk_pelatihan = BentukPelatihan::where('status', 'aktif')->latest('updated_at')->get();

        // Ambil mitra yg aktif dan paling baru diupdate
        $mitra = Mitra::where('status', 'aktif')->latest('updated_at')->get();

        // Hanya ambil 1 target pelatihan terbaru
        $target_pelatihan = TargetPelatihan::latest('updated_at')->first();

        // Hanya ambil 1 section bentuk pelatihan terbaru
        $section_bentuk_pelatihan = SectionBentukPelatihan::latest('updated_at')->first();

        // Menampilkan Section Homepage
        $section = Section::orderBy('order')->get();

        $asset = Asset::latest('updated_at')->first();

        // Ambil 1 Hero yang baru diupdate
        $hero = Hero::latest('updated_at')->first();
        

        $portofolio = Portofolio::latest('updated_at')->get();
        return view('frontend.home', compact('portofolio', 'profil', 'blog', 'kontak', 'bentuk_pelatihan', 'mitra', 'target_pelatihan', 'section_bentuk_pelatihan', 'section', 'asset', 'hero'));
    }
}
