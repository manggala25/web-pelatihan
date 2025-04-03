<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        
        $profil = Profil::orderBy('updated_at', 'desc')->get();
        return view('backend.profil.index', [
            'page_title' => 'Profil',
            // 'tambah' => 'admin.profil.create',
            'showTambah' => false,
            'profil' => $profil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){}

    /**
     * Display the specified resource.
     */
    public function show($id){
        $profil = Profil::where('id', $id)->firstOrFail();

        return view('backend.profil.show', [
            'page_title' => 'Detail Profil',
            'showTambah' => false,
            'profil' => $profil
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $profil = Profil::findOrFail($id);

        return view('backend.profil.edit', [
            'page_title' => 'Edit Profil',
            'showTambah' => false,
            'profil' => $profil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_top' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'img_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cari profil berdasarkan ID
        $profil = Profil::findOrFail($id);

        // Jika ada file gambar yang diupload
        if ($request->hasFile('img_profil')) {
            // Hapus gambar lama jika ada
            if ($profil->img_profil && Storage::disk('public')->exists($profil->img_profil)) {
                Storage::disk('public')->delete($profil->img_profil);
            }

            // Simpan gambar baru ke folder "profil" di disk "public"
            $filePath = $request->file('img_profil')->store('profil', 'public');

            // Update path gambar di database
            $profil->img_profil = $filePath;
        }

        // Update data lainnya
        $profil->title_top = $request->title_top;
        $profil->heading = $request->heading;
        $profil->deskripsi = $request->deskripsi;

        // Simpan perubahan ke database
        $profil->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.profil')->with('success', 'Profil berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(){}

}