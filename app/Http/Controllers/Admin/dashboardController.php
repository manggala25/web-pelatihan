<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Portofolio;
use App\Models\NamaPelatihan;
use App\Models\BentukPelatihan;
use App\Models\JadwalPelatihan;

class dashboardController extends Controller
{
    public function index()
    {
        $jumlahBlog = Blog::where('status', 'publish')->count();
        $jumlahPortofolio = Portofolio::count();
        $jumlahPelatihan = NamaPelatihan::count();
        $jumlahBentukPelatihan = BentukPelatihan::count();

        // Urutkan Jadwal Pelatihan Paling Dekat Dengan Hari ini
        $jadwalpelatihan = JadwalPelatihan::whereDate('waktu', '>=', now()) // hanya yang akan datang
            ->orderBy('waktu', 'asc') // paling dekat dulu
            ->get();

        return view('backend.dashboard.index', [
            'showTambah' => false,
            'page_title' => 'Dashboard',
            'jumlahBlog' => $jumlahBlog,
            'jumlahPortofolio' => $jumlahPortofolio,
            'jumlahPelatihan' => $jumlahPelatihan,
            'jumlahBentukPelatihan' => $jumlahBentukPelatihan,
            'jadwalpelatihan' => $jadwalpelatihan,
        ]);
    }
}
