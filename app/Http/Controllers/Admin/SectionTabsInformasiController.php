<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionTabsInformasi;

class SectionTabsInformasiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $sectiontabsinformasi = SectionTabsInformasi::orderBy('updated_at', 'desc')->get();
        return view('backend.sectiontabsinformasi.index', [
            'page_title' => 'Section Tabs Informasi',
            'tambah' => 'admin.sectiontabsinformasi.create',
            'showTambah' => true,
            'sectiontabsinformasi' => $sectiontabsinformasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.sectiontabsinformasi.create', [
            'page_title' => 'Tambah Section Tabs Informasi',
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
            'top_title' => 'required',
            'heading' => 'required|string',
        ], [
            'top_title.required' => 'top title tidak boleh kosong',
            'heading.required' => 'heading informasi tidak boleh kosong.',
        ]);

        // Simpan ke database
        SectionTabsInformasi::create([
            'top_title' => $request->top_title,
            'heading' => $request->heading,
        ]);

        return redirect()->route('admin.sectiontabsinformasi')->with('success', 'Informasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sectiontabsinformasi = SectionTabsInformasi::where('id', $id)->firstOrFail();

        return view('backend.sectiontabsinformasi.show', [
            'page_title' => 'Detail Section Tabs Informasi',
            'showTambah' => false,
            'sectiontabsinformasi' => $sectiontabsinformasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sectiontabsinformasi = SectionTabsInformasi::findOrFail($id);

        return view('backend.sectiontabsinformasi.edit', [
            'page_title' => 'Edit Section Tabs Informasi',
            'showTambah' => false,
            'sectiontabsinformasi' => $sectiontabsinformasi
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
            'top_title' => 'required',
            'heading' => 'required',
        ]);

        $sectiontabsinformasi = SectionTabsInformasi::findOrFail($id);
        $sectiontabsinformasi->heading = $request->heading;
        $sectiontabsinformasi->top_title = $request->top_title;
        $sectiontabsinformasi->save();

        return redirect()->route('admin.sectiontabsinformasi')
            ->with('success', 'Section Tabs Informasi berhasil diperbarui.');
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
            $informasi = SectionTabsInformasi::findOrFail($id);
            $informasi->delete();

            return redirect()->route('admin.sectiontabsinformasi')
                ->with('success', 'Section Tabs Informasi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.sectiontabsinformasi')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
}
