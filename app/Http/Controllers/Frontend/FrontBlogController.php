<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog; // Pastikan modelnya ada
use App\Models\Kontak;

class FrontBlogController extends Controller
{
  public function index()
  {
    $blogs = Blog::where('status', 'publish')
      ->orderBy('published_at', 'desc')
      ->paginate(12);

    // Kontak
    $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

    return view('frontend.blog', compact('blogs', 'kontak'));
  }

  public function show($slug)
  {
    $blog = Blog::where('slug', $slug)->firstOrFail(); // Ambil data berdasarkan slug

    // Kontak
    $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat'])->get();

    return view('frontend.detail-blog', compact('blog', 'kontak')); // Pastikan view detail tersedia
  }
}
