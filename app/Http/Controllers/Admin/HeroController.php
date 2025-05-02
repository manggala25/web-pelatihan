<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::orderBy('updated_at', 'desc')->get();
        return view('backend.hero.index', [
            'page_title' => 'Hero Section',
            // 'tambah' => 'admin.hero.create',
            'showTambah' => false,
            'hero' => $hero
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hero = Hero::where('id', $id)->firstOrFail();

        return view('backend.hero.show', [
            'page_title' => 'Detail Hero Section',
            'showTambah' => false,
            'hero' => $hero
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hero = Hero::findOrFail($id);

        return view('backend.hero.edit', [
            'page_title' => 'Edit Hero Section',
            'showTambah' => false,
            'hero' => $hero,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'paragraf' => 'required|string',
            'background' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cari hero berdasarkan ID
        $hero = Hero::findOrFail($id);

        // Jika ada file gambar yang diupload
        if ($request->hasFile('background')) {
            // Hapus gambar lama jika ada
            if ($hero->background && Storage::disk('public')->exists($hero->background)) {
                Storage::disk('public')->delete($hero->background);
            }

            // Simpan gambar baru ke folder "hero" di disk "public"
            $filePath = $request->file('background')->store('hero', 'public');

            // Update path gambar di database
            $hero->background = $filePath;
        }

        // Update data lainnya
        $hero->top_title = $request->top_title;
        $hero->heading = $request->heading;
        $hero->paragraf = $request->paragraf;

        // Simpan perubahan ke database
        $hero->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.hero')->with('success', 'hero berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
