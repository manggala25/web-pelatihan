<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TabsInformasi;

class TabsInformasiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $tabsinformasi = TabsInformasi::orderBy('updated_at', 'desc')->get();
        return view('backend.tabsinformasi.index', [
            'page_title' => 'Tabs Informasi',
            'tambah' => 'admin.tabsinformasi.create',
            'showTambah' => true,
            'tabsinformasi' => $tabsinformasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tabsinformasi.create', [
            'page_title' => 'Tambah Tabs Informasi',
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
            'nama_tabs' => 'required',
            'content' => 'required|string',
        ], [
            'nama_tabs.required' => 'Nama Tabs tidak boleh kosong',
            'content.required' => 'Isi Tabs informasi tidak boleh kosong.',
        ]);

        // Simpan ke database
        TabsInformasi::create([
            'nama_tabs' => $request->nama_tabs,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.tabsinformasi')->with('success', 'Informasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tabsinformasi = TabsInformasi::where('id', $id)->firstOrFail();

        return view('backend.tabsinformasi.show', [
            'page_title' => 'Detail Tabs Informasi',
            'showTambah' => false,
            'tabsinformasi' => $tabsinformasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tabsinformasi = TabsInformasi::findOrFail($id);

        return view('backend.tabsinformasi.edit', [
            'page_title' => 'Edit Tabs Informasi',
            'showTambah' => false,
            'tabsinformasi' => $tabsinformasi
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
            'nama_tabs' => 'required',
            'content' => 'required',
        ]);

        $tabsinformasi = TabsInformasi::findOrFail($id);
        $tabsinformasi->content = $request->content;
        $tabsinformasi->nama_tabs = $request->nama_tabs;
        $tabsinformasi->save();

        return redirect()->route('admin.tabsinformasi')
            ->with('success', 'Tabs Informasi berhasil diperbarui.');
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
            $informasi = TabsInformasi::findOrFail($id);
            $informasi->delete();

            return redirect()->route('admin.tabsinformasi')
                ->with('success', 'Tabs Informasi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tabsinformasi')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
}
