<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog; // Pastikan modelnya ada
use App\Models\Kontak;
use App\Models\Banner;
use App\Models\Asset;

class FrontBlogController extends Controller
{
  public function index()
  {
    $blogs = Blog::where('status', 'publish')
      ->orderBy('published_at', 'desc')
      ->paginate(12);

    // Kontak
    $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat', 'jam operasional'])->get();

    $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

    $asset = Asset::latest('updated_at')->first();

    return view('frontend.blog', compact('blogs', 'kontak', 'latestBanner', 'asset'));
  }

  public function show($slug)
  {
    $blog = Blog::where('slug', $slug)->firstOrFail(); // Ambil data berdasarkan slug

    // Kontak
    $kontak = Kontak::whereIn('nama_kontak', ['facebook', 'twitter', 'instagram', 'whatsapp', 'email', 'alamat', 'jam operasional'])->get();

    $latestBanner = Banner::orderBy('updated_at', 'desc')->first(); // Ambil satu yang paling baru

    $asset = Asset::latest('updated_at')->first();

    return view('frontend.detail-blog', compact('blog', 'kontak', 'latestBanner', 'asset')); // Pastikan view detail tersedia
  }
}
