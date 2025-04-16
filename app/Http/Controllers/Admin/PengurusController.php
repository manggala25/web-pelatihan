<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    /**
     * Menampilkan daftar Pengurus.
     */
    public function index()
    {
        $pengurus = Pengurus::orderBy('updated_at', 'desc')->get();
        return view('backend.pengurus.index', [
            'page_title' => 'Pengurus',
            'showTambah' => false,
            'pengurus' => $pengurus,
        ]);
    }

    /**
     * Menampilkan form untuk menambah data.
     */
    public function create() {}

    /**
     * Menyimpan data baru ke database.
     */
    public function store(Request $request) {}

    /**
     * Menampilkan detail Pengurus.
     */
    public function show($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('backend.pengurus.show', [
            'page_title' => 'Detail Pengurus',
            'showTambah' => false,
            'pengurus' => $pengurus
        ]);
    }

    /**
     * Menampilkan form edit Pengurus.
     */
    public function edit($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('backend.pengurus.edit', [
            'page_title' => 'Edit Pengurus',
            'showTambah' => false,
            'pengurus' => $pengurus
        ]);
    }

    /**
     * Memperbarui data Pengurus.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $pengurus = Pengurus::findOrFail($id);
        $pengurus->update($request->all());

        return redirect()->route('admin.pengurus')->with('success', 'Pengurus berhasil diperbarui!');
    }

    /**
     * Menghapus Pengurus dari database.
     */
    public function destroy($id) {}
}
