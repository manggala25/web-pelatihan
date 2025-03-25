<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog; // Pastikan modelnya ada

class FrontBlogController extends Controller
{
  public function index()
  {
    $blogs = Blog::where('status', 'publish')
      ->orderBy('published_at', 'desc')
      ->paginate(12);
    return view('frontend.blog', compact('blogs'));
  }

  public function show($slug)
  {
    $blog = Blog::where('slug', $slug)->firstOrFail(); // Ambil data berdasarkan slug

    return view('frontend.detail-blog', compact('blog')); // Pastikan view detail tersedia
  }
}
