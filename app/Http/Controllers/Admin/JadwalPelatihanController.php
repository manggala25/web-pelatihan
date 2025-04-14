<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JadwalPelatihan;

class JadwalPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalpelatihan = JadwalPelatihan::orderBy('waktu', 'asc')->get();
        return view('backend.jadwal-pelatihan.index', [
            'page_title' => 'Jadwal Pelatihan',
            'tambah' => 'admin.jadwal-pelatihan.create',
            'showTambah' => true,
            'jadwalpelatihan' => $jadwalpelatihan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.jadwal-pelatihan.create', [
            'page_title' => 'Tambah Jadwal Pelatihan',
            'showTambah' => false,
        ]);
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'waktu' => 'required|date',
            'lokasi' => 'required|string|max:255',
        ]);

        try {
            // Simpan data
            JadwalPelatihan::create([
                'waktu' => $request->waktu,
                'lokasi' => $request->lokasi,
            ]);

            return redirect()->route('admin.jadwal-pelatihan')
                ->with('success', 'Jadwal pelatihan berhasil disimpan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menyimpan: ' . $e->getMessage());
        }
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwalpelatihan = JadwalPelatihan::find($id);
        return view('backend.jadwal-pelatihan.edit', [
            'page_title' => 'Tambah Jadwal Pelatihan',
            'showTambah' => false,
            'jadwalpelatihan' => $jadwalpelatihan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'waktu' => 'required|date',
            'lokasi' => 'required|string|max:255',
        ]);

        // Cari data berdasarkan ID
        $jadwalpelatihan = JadwalPelatihan::findOrFail($id);

        // Update data
        $jadwalpelatihan->update([
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.jadwal-pelatihan')->with('success', 'Jadwal pelatihan berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwalpelatihan = JadwalPelatihan::findOrFail($id);

        $jadwalpelatihan->delete();

        return redirect()->route('admin.jadwal-pelatihan')->with('success', 'Jadwal pelatihan berhasil dihapus.');
    }
}

