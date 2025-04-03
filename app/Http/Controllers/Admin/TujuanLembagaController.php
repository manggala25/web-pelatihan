<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TujuanLembaga;

class TujuanLembagaController extends Controller
{
    /**
     * Menampilkan daftar tujuan lembaga.
     */
    public function index()
    {
        $tujuanlembaga = TujuanLembaga::orderBy('updated_at', 'desc')->get();
        return view('backend.tujuanlembaga.index', [
            'page_title' => 'Tujuan Lembaga',
            'showTambah' => false,
            'tujuanlembaga' => $tujuanlembaga,
        ]);
    }

    /**
     * Menampilkan form untuk menambah data.
     */
    public function create()
    {
    }

    /**
     * Menyimpan data baru ke database.
     */
    public function store(Request $request)
    {
    }

    /**
     * Menampilkan detail tujuan lembaga.
     */
    public function show($id)
    {
        $tujuanlembaga = TujuanLembaga::findOrFail($id);
        return view('backend.tujuanlembaga.show', [
            'page_title' => 'Detail Tujuan Lembaga',
            'showTambah' => false,
            'tujuanlembaga' => $tujuanlembaga
        ]);
    }

    /**
     * Menampilkan form edit tujuan lembaga.
     */
    public function edit($id)
    {
        $tujuanlembaga = TujuanLembaga::findOrFail($id);
        return view('backend.tujuanlembaga.edit', [
            'page_title' => 'Edit Tujuan Lembaga',
            'showTambah' => false,
            'tujuanlembaga' => $tujuanlembaga
        ]);
    }

    /**
     * Memperbarui data tujuan lembaga.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_top' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $tujuanlembaga = TujuanLembaga::findOrFail($id);
        $tujuanlembaga->update($request->all());

        return redirect()->route('admin.tujuanlembaga')->with('success', 'Tujuan Lembaga berhasil diperbarui!');
    }

    /**
     * Menghapus tujuan lembaga dari database.
     */
    public function destroy($id)
    {
    }
}
