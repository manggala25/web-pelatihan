<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Legalitas;

class LegalitasController extends Controller
{
    /**
     * Menampilkan daftar Legalitas.
     */
    public function index()
    {
        $legalitas = Legalitas::orderBy('updated_at', 'desc')->get();
        return view('backend.legalitas.index', [
            'page_title' => 'Legalitas',
            'showTambah' => false,
            'legalitas' => $legalitas,
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
     * Menampilkan detail Legalitas.
     */
    public function show($id)
    {
        $legalitas = Legalitas::findOrFail($id);
        return view('backend.legalitas.show', [
            'page_title' => 'Detail Legalitas',
            'showTambah' => false,
            'legalitas' => $legalitas
        ]);
    }

    /**
     * Menampilkan form edit Legalitas.
     */
    public function edit($id)
    {
        $legalitas = Legalitas::findOrFail($id);
        return view('backend.legalitas.edit', [
            'page_title' => 'Edit Legalitas',
            'showTambah' => false,
            'legalitas' => $legalitas
        ]);
    }

    /**
     * Memperbarui data Legalitas.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $legalitas = Legalitas::findOrFail($id);
        $legalitas->update($request->all());

        return redirect()->route('admin.legalitas')->with('success', value: 'Legalitas berhasil diperbarui!');
    }

    /**
     * Menghapus Legalitas dari database.
     */
    public function destroy($id) {}
}
