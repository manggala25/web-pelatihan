<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SectionBentukPelatihan;

class SectionBentukPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectionbentukpelatihanbentukpelatihan = SectionBentukPelatihan::orderBy('updated_at', 'desc')->get();

        return view('backend.section-bentuk-pelatihan.index', [
            'page_title' => 'Section Bentuk Pelatihan',
            'showTambah' => false,
            'sectionbentukpelatihan' => $sectionbentukpelatihanbentukpelatihan
        ]);
    }   
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sectionbentukpelatihanbentukpelatihan = SectionBentukPelatihan::where('id', $id)->firstOrFail();
        return view('backend.section-bentuk-pelatihan.edit', [
            'page_title' => 'Edit Section Bentuk Pelatihan',
            'showTambah' => false,
            'sectionbentukpelatihan' => $sectionbentukpelatihanbentukpelatihan
        ]);
    }

    /*
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
            'top_title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Temukan section berdasarkan ID
        $sectionbentukpelatihan = SectionBentukPelatihan::findOrFail($id);

        // Perbarui data
        $sectionbentukpelatihan->top_title = $request->top_title;
        $sectionbentukpelatihan->heading = $request->heading;
        $sectionbentukpelatihan->deskripsi = $request->deskripsi;
        $sectionbentukpelatihan->save(); // Simpan perubahan ke database

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.section-bentuk-pelatihan')->with('success', 'Section berhasil diperbarui.');
    }
}
