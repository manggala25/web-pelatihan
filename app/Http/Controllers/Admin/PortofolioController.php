<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;


class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolio = Portofolio::orderBy('updated_at', 'desc')->get();
        return view('backend.portofolio.index', [
            'page_title' => 'Portofolio',
            'tambah' => 'admin.portofolio.create',
            'showTambah' => true,
            'portofolio' => $portofolio
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portofolio.create', [
            'page_title' => 'Tambah Portofolio',
            'showTambah' => false,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_portofolio' => 'required|string|max:255',
            'nama_klien' => 'required|string|max:255',
            'kategori_tema' => 'required|string|max:255',
            'nama_pelatihan' => 'required|string|max:255',
            'waktu_awal' => 'required|date',
            'waktu_akhir' => 'required|date|after_or_equal:waktu_awal',
            'nama_tempat' => 'required|string|max:255',
            'kota_kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required',
            'link_klien' => 'nullable|url',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $thumbnailPath = $request->file('thumbnail') ? $request->file('thumbnail')->store('portofolio/thumbnails', 'public') : null;
        $coverPath = $request->file('cover') ? $request->file('cover')->store('portofolio/covers', 'public') : null;

        Portofolio::create([
            'judul_portofolio' => $request->judul_portofolio,
            'nama_klien' => $request->nama_klien,
            'kategori_tema' => $request->kategori_tema,
            'nama_pelatihan' => $request->nama_pelatihan,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir,
            'nama_tempat' => $request->nama_tempat,
            'kota_kabupaten' => $request->kota_kabupaten,
            'provinsi' => $request->provinsi,
            'thumbnail' => $thumbnailPath,
            'cover' => $coverPath,
            'content' => $request->content,
            'link_klien' => $request->link_klien,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.portofolio')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($judul_portofolio)
    {
        // Cari portofolio berdasarkan judul_portofolio
        $portofolio = Portofolio::where('judul_portofolio', $judul_portofolio)->firstOrFail();

        return view('backend.portofolio.show', [
            'page_title' => 'Detail Portofolio',
            'showTambah' => false,
            'portofolio' => $portofolio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('backend.portofolio.edit', [
            'page_title' => 'Edit Portofolio',
            'showTambah' => false,
            'portofolio' => $portofolio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'judul_portofolio' => 'required|string|max:255',
            'nama_klien' => 'required|string|max:255',
            'kategori_tema' => 'required|string|max:255',
            'nama_pelatihan' => 'required|string|max:255',
            'waktu_awal' => 'required|date',
            'waktu_akhir' => 'required|date|after_or_equal:waktu_awal',
            'nama_tempat' => 'required|string|max:255',
            'kota_kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required',
            'link_klien' => 'nullable|url',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $data = $request->except(['thumbnail', 'cover']);

        if ($request->hasFile('thumbnail')) {
            Storage::disk('public')->delete($portofolio->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('portofolio/thumbnails', 'public');
        }

        if ($request->hasFile('cover')) {
            Storage::disk('public')->delete($portofolio->cover);
            $data['cover'] = $request->file('cover')->store('portofolio/covers', 'public');
        }

        $portofolio->update($data);

        return redirect()->route('admin.portofolio')->with('success', 'Portofolio berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $portofolio = Portofolio::findOrFail($id);

        // Hapus file thumbnail jika ada
        if ($portofolio->thumbnail) {
            Storage::disk('public')->delete($portofolio->thumbnail);
        }

        // Hapus file cover jika ada
        if ($portofolio->cover) {
            Storage::disk('public')->delete($portofolio->cover);
        }

        // Hapus data dari database
        $portofolio->delete();

        return redirect()->route('admin.portofolio')->with('success', 'Portofolio berhasil dihapus!');
    }
}
