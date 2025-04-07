<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Mitra;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $mitra = Mitra::orderBy('updated_at', 'desc')->get();

        return view('backend.mitra.index', [
            'page_title' => 'Mitra',
            'tambah' => 'admin.mitra.create',
            'showTambah' => true,
            'mitra' => $mitra
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('backend.mitra.create', [
            'page_title' => 'Tambah Mitra',
            'showTambah' => false,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_mitra' => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Validasi gambar
        ]);

        // Inisialisasi model Mitra
        $mitra = new mitra();
        $mitra->nama_mitra = $request->nama_mitra;
        $mitra->status = $request->status;

        // Proses upload gambar jika ada
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension(); // Buat nama file unik
            Storage::disk('public')->putFileAs('mitra', $logo, $logoName); // Simpan file ke storage
            $mitra->logo = 'mitra/' . $logoName; // Simpan path gambar
        }

        // Simpan data ke database
        $mitra->save();

        // Redirect atau kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.mitra')->with('success', 'Mitra berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mitra = Mitra::where('id', $id)->firstOrFail();

        return view('backend.mitra.edit', [
            'page_title' => 'Edit Mitra',
            'showTambah' => false, // Tambahkan ini
            'mitra' => $mitra
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_mitra' => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
            ]);

        // Inisialisasi model Mitra
        $mitra = Mitra::where('id', $id)->firstOrFail();
        $mitra->nama_mitra = $request->nama_mitra;
        $mitra->status = $request->status;

        // Proses upload gambar jika ada
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension(); // Buat nama file unik
            Storage::disk('public')->putFileAs('mitra', $logo, $logoName); // Simpan file ke storage
            $mitra->logo = 'mitra/' . $logoName; // Simpan path gambar
        }

        // Simpan data ke database
        $mitra->save();

        // Redirect atau kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.mitra')->with('success', 'Mitra berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitra = Mitra::where('id', $id)->firstOrFail();
        
        // Hapus file gambar jika ada
        if ($mitra->logo) {
            Storage::disk('public')->delete($mitra->logo);
        }   
        $mitra->delete();

        return redirect()->route('admin.mitra')->with('success', 'Mitra berhasil dihapus.');
    }
}
