<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NamaPelatihan;
use App\Models\Kontak;

class FrontFormulirPendaftaranController extends Controller
{
    public function index()
    {
        // Mengambil nama Pelatihan
        $nama_pelatihan = NamaPelatihan::all();

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        return view('frontend.formulir-pendaftaran', compact('nama_pelatihan', 'kontak'));
    }
}
