<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('published_at', 'desc')->get();
        return view('backend.blog.index', [
            'page_title' => 'Blog',
            'tambah' => 'admin.blog.create', // Sesuaikan dengan nama route
            'showTambah' => true, // Ubah ke false jika tidak ingin tombol muncul
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('backend.blog.create',[
            'page_title' => 'Tambah Blog',
            'showTambah' => false, // Ubah ke false jika tidak ingin tombol muncul
        ]);
    }
}
