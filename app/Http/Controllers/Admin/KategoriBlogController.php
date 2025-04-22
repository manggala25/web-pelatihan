<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\KategoriBlog;

class KategoriBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriblog = KategoriBlog::orderBy('updated_at', 'desc')->get();
        return view('backend.kategoriblog.index', [
            'page_title' => 'Kategori Blog',
            'tambah' => 'admin.kategoriblog.create',
            'showTambah' => true,
            'kategoriblog' => $kategoriblog
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kategoriblog.create', [
            'page_title' => 'Tambah Kategori Blog',
            'showTambah' => false,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategoriblog = KategoriBlog::findOrFail($id);
        return view('backend.kategoriblog.edit', [
            'page_title' => 'Edit Kategori Blog',
            'showTambah' => false,
            'kategoriblog' => $kategoriblog
        ]);
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori.required' => 'Nama Kategori tidak boleh kosong',
        ]);

        // Simpan ke database
        KategoriBlog::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('admin.kategoriblog')->with('success', 'Informasi berhasil disimpan.');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori.required' => 'Nama Kategori tidak boleh kosong',
        ]);

        // Simpan ke database
        $kategoriblog = KategoriBlog::findOrFail($id);
        $kategoriblog->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('admin.kategoriblog')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategoriblog = KategoriBlog::findOrFail($id);
        $kategoriblog->delete();

        return redirect()->route('admin.kategoriblog')->with('success', 'Kategori berhasil dihapus!');
    }   
}
