<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kontak;
use App\Models\NamaPelatihan;
use App\Models\Banner;

class FrontKontakController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();

        // Mengambil data kontak dengan nama 'gmaps frame'
        $gmapsFrame = Kontak::where('nama_kontak', 'gmaps frame')->first();

        // Mengambil Whatsapp
        $whatsapp = Kontak::where('nama_kontak', 'whatsapp')->first();

        // Mengambil Email
        $email = Kontak::where('nama_kontak', 'email')->first();

        // Alamat
        $alamat = Kontak::where('nama_kontak', 'alamat')->first();

        // Mengambil data kontak yang hanya memiliki nama 'facebook', 'twitter', dan 'instagram'
        $informasi_kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram'])->get();

        // Kontak
        $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

        // Mengambil nama Pelatihan
        $nama_pelatihan = NamaPelatihan::all();

        $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

        return view('frontend.kontak', compact('kontak', 'gmapsFrame', 'whatsapp', 'email', 'alamat', 'informasi_kontak', 'nama_pelatihan', 'latestBanner'));
    }
}
