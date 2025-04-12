<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformasiPendaftaran;


class InformasiPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $informasipendaftaran = InformasiPendaftaran::orderBy('updated_at', 'desc')->get();
        return view('backend.informasipendaftaran.index', [
            'page_title' => 'Informasi Pendaftaran',
            'tambah' => 'admin.informasipendaftaran.create',
            'showTambah' => true,
            'informasipendaftaran' => $informasipendaftaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.informasipendaftaran.create', [
            'page_title' => 'Tambah Informasi Pendaftaran',
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
            'content' => 'required|string',
        ], [
            'content.required' => 'Isi informasi pendaftaran tidak boleh kosong.',
        ]);

        // Simpan ke database
        InformasiPendaftaran::create([
            'content' => $request->content,
        ]);

        return redirect()->route('admin.informasipendaftaran')->with('success', 'Informasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $informasipendaftaran = InformasiPendaftaran::where('id', $id)->firstOrFail();

        return view('backend.informasipendaftaran.show', [
            'page_title' => 'Detail Informasi Pendaftaran',
            'showTambah' => false,
            'informasipendaftaran' => $informasipendaftaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $informasipendaftaran = InformasiPendaftaran::findOrFail($id);

        return view('backend.informasipendaftaran.edit', [
            'page_title' => 'Edit Informasi Pendaftaran',
            'showTambah' => false,
            'informasipendaftaran' => $informasipendaftaran
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $informasipendaftaran = InformasiPendaftaran::findOrFail($id);
        $informasipendaftaran->content = $request->content;
        $informasipendaftaran->save();

        return redirect()->route('admin.informasipendaftaran')
            ->with('success', 'Informasi pendaftaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $informasi = InformasiPendaftaran::findOrFail($id);
            $informasi->delete();

            return redirect()->route('admin.informasipendaftaran')
                ->with('success', 'Informasi pendaftaran berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.informasipendaftaran')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
}
