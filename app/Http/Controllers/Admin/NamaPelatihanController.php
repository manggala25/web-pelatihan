<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NamaPelatihan;
use App\Models\KategoriTema;
use Illuminate\Support\Str;

class NamaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama_pelatihan = NamaPelatihan::orderBy('updated_at', 'desc')->get();
        return view('backend.nama-pelatihan.index', [
            'page_title' => 'Nama Pelatihan',
            'tambah' => 'admin.nama-pelatihan.create',
            'showTambah' => true,
            'nama_pelatihan' => $nama_pelatihan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_tema = KategoriTema::orderBy('nama_kategori', 'asc')->get();

        return view('backend.nama-pelatihan.create', [
            'page_title' => 'Tambah Nama Pelatihan',
            'showTambah' => false,
            'kategori_tema' => $kategori_tema, // Pastikan ini ada
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelatihan' => 'required|string|max:255',
            'content' => 'required',
            'nama_kategori' => 'required|exists:kategori_tema,id',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        // Ambil nama_kategori berdasarkan ID yang dipilih
        $kategori = KategoriTema::findOrFail($request->nama_kategori);

        NamaPelatihan::create([
            'nama_pelatihan' => $request->nama_pelatihan,
            'slug' => Str::slug($request->nama_pelatihan),
            'content' => $request->content,
            'nama_kategori' => $kategori->nama_kategori, // Simpan nama kategori
            'status' => $request->status,
        ]);


        return redirect()->route('admin.nama-pelatihan')->with('success', 'Nama Pelatihan berhasil ditambahkan!');
    }



    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $nama_pelatihan = NamaPelatihan::where('slug', $slug)->firstOrFail();
        return view('backend.nama-pelatihan.show', [
            'page_title' => 'Detail Nama Pelatihan',
            'showTambah' => false,
            'nama_pelatihan' => $nama_pelatihan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $nama_pelatihan = NamaPelatihan::findOrFail($id);
        $kategori_tema = KategoriTema::orderBy('nama_kategori', 'asc')->get();

        return view('backend.nama-pelatihan.edit', [
            'page_title' => 'Edit Nama Pelatihan',
            'showTambah' => false,
            'nama_pelatihan' => $nama_pelatihan, // Ubah dari 'namaPelatihan' ke 'nama_pelatihan'
            'kategori_tema' => $kategori_tema,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nama_pelatihan = NamaPelatihan::findOrFail($id);
        $request->validate([
            'nama_pelatihan' => 'required|string|max:255',
            'content' => 'required',
            'nama_kategori' => 'required|exists:kategori_tema,id',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $kategori = KategoriTema::findOrFail($request->nama_kategori); // Ambil nama kategori berdasarkan ID
        $nama_pelatihan->update([
            'nama_pelatihan' => $request->nama_pelatihan,
            'slug' => Str::slug($request->nama_pelatihan),
            'content' => $request->content,
            'nama_kategori' => $kategori->nama_kategori, // Simpan nama kategori
            'status' => $request->status,
        ]);


        return redirect()->route('admin.nama-pelatihan')->with('success', 'Nama Pelatihan berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nama_pelatihan = NamaPelatihan::findOrFail($id);
        $nama_pelatihan->delete();
        return redirect()->route('admin.nama-pelatihan')->with('success', 'Nama Pelatihan berhasil dihapus!');
    }
}
