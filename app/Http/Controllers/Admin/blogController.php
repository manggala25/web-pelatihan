<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class blogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('published_at', 'desc')->get();
        return view('backend.blog.index', [
            'page_title' => 'Blog',
            'tambah' => 'admin.blog.create',
            'showTambah' => true,
            'blogs' => $blogs
        ]);
    }
    public function show($slug)
    {
        // Cari blog berdasarkan slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('backend.blog.show', [
            'page_title' => 'Detail Blog',
            'showTambah' => false,
            'blog' => $blog
        ]);
    }


    public function create()
    {
        return view('backend.blog.create', [
            'page_title' => 'Tambah Blog',
            'showTambah' => false,
        ]);
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'judul' => 'required|max:255',
                'slug' => 'required|unique:blogs,slug|max:255',
                'kategori' => 'required|max:255',
                'status' => 'required|in:draft,publish,archive',
                'content' => 'required',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $blog = new Blog();
            $blog->judul = $validated['judul'];
            $blog->slug = Str::slug($validated['slug']); // Format slug URL-friendly
            $blog->kategori = $validated['kategori'];
            $blog->status = $validated['status'];
            $blog->content = $validated['content'];

            // Upload Thumbnail jika ada
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('uploads/thumbnails', $filename, 'public');
                $blog->thumbnail = 'storage/' . $path;
            }

            // Set published_at jika statusnya publish
            $blog->published_at = ($validated['status'] == 'publish') ? now() : null;

            // Simpan data
            $blog->save();

            return redirect()->route('admin.blog')->with('success', 'Blog berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('blog-images', 'public');
            return response()->json(['url' => asset('storage/' . $path)]);
        }
        return response()->json(['error' => 'Upload gagal'], 400);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:blogs,slug,' . $id,
                'kategori' => 'required|string|max:255',
                'status' => 'required|in:draft,publish,archive',
                'content' => 'required',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $blog = Blog::findOrFail($id);
            $blog->judul = $request->judul;
            $blog->slug = Str::slug($request->slug);
            $blog->kategori = $request->kategori;
            $blog->status = $request->status;
            $blog->content = $request->content;
            $blog->published_at = ($request->status === 'publish') ? now() : null;

            if ($request->hasFile('thumbnail')) {
                if ($blog->thumbnail) {
                    Storage::disk('public')->delete(str_replace('storage/', '', $blog->thumbnail));
                }

                $file = $request->file('thumbnail');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('uploads/thumbnails', $filename, 'public');
                $blog->thumbnail = 'storage/' . $path;
            }

            $blog->save();

            return redirect()->route('admin.blog')->with('success', 'Blog berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('backend.blog.edit', [
            'page_title' => 'Edit Blog',
            'showTambah' => false, // Tambahkan ini
            'blog' => $blog
        ]);
    }

    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();

            return redirect()->route('admin.blog')->with('success', 'Blog berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.blog')->with('error', 'Gagal menghapus blog.');
        }
    }
}
