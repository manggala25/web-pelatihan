<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Kontak;

class InformasiKontakController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasi_kontak = Kontak::orderBy('updated_at', 'desc')->get();

        return view('backend.informasikontak.index', [
            'page_title' => 'Informasi Kontak',
            'tambah' => 'admin.informasikontak.create',
            'showTambah' => true,
            'informasi_kontak' => $informasi_kontak
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $informasi_kontak = Kontak::orderBy('nama_kontak', 'asc')->get();

        return view('backend.informasikontak.create', [
            'page_title' => 'Tambah Informasi Kontak',
            'showTambah' => false,
            'informasi_kontak' => $informasi_kontak, // Pastikan ini ada
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kontak' => 'required|string|max:255',
            'link' => 'required',
            'icon' => 'nullable|string',
            'deskripsi' => 'required|string',
        ]);

        Kontak::create([
            'nama_kontak' => $request->nama_kontak,
            'link' => $request->link,
            'icon' => $request->icon,
            'deskripsi' => $request->deskripsi,
        ]);


        return redirect()->route('admin.informasikontak')->with('success', 'Informasi Kontak berhasil ditambahkan!');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $informasi_kontak = Kontak::where('id', $id)->firstOrFail();
        return view('backend.informasikontak.show', [
            'page_title' => 'Detail Informasi Kontak',
            'showTambah' => false,
            'informasi_kontak' => $informasi_kontak
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $informasi_kontak = Kontak::findOrFail($id);

        return view('backend.informasikontak.edit', [
            'page_title' => 'Edit Informasi Kontak',
            'showTambah' => false,
            'informasi_kontak' => $informasi_kontak
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $informasi_kontak = Kontak::findOrFail($id);
        $request->validate([
            'nama_kontak' => 'required|string|max:255',
            'link' => 'required',
            'icon' => 'nullable|string',
            'deskripsi' => 'required|string',
        ]);

        $informasi_kontak->update([
            'nama_kontak' => $request->nama_kontak,
            'link' => $request->link,
            'icon' => $request->icon,
            'deskripsi' => $request->deskripsi,
        ]);


        return redirect()->route('admin.informasikontak')->with('success', 'Informasi Kontak berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $informasi_kontak = Kontak::findOrFail($id);
        
        $informasi_kontak->delete();

        return redirect()->route('admin.informasikontak')->with('success', 'Informasi Kontak berhasil dihapus!');
    }
}
