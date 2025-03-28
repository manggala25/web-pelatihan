<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio; // Pastikan modelnya ada

class FrontGaleriController extends Controller
{
  public function index()
  {
    $portofolio = Portofolio::latest()->paginate(6);
    return view('frontend.galeri', compact('portofolio'));
  }

  public function show($slug)
  {
    $portofolio = Portofolio::where('slug', $slug)->firstOrFail(); // Ambil data berdasarkan slug

    return view('frontend.detail-galeri', compact('portofolio')); // Pastikan view detail tersedia
  }
}
