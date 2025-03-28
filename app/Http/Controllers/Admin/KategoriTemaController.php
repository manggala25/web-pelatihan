<?php

namespace App\Http\Controllers;

use App\Models\KategoriTema;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriTemaController extends Controller
{
    public function index()
    {
        $kategori_tema = KategoriTema::all();
        return view('admin.kategori_tema', compact('kategori_tema'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori_tema,nama_kategori',
            'deskripsi' => 'nullable|string',
        ]);

        KategoriTema::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
            'deskripsi' => $request->deskripsi,
            'status' => $request->status ?? 'aktif',
        ]);

        return response()->json(['success' => 'Kategori berhasil ditambahkan!']);
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriTema::findOrFail($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'Kategori berhasil diperbarui!']);
    }

    public function destroy($id)
    {
        KategoriTema::destroy($id);
        return response()->json(['success' => 'Kategori berhasil dihapus!']);
    }
}
