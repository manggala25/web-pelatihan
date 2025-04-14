<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BannerKontak;

class BannerKontakController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerkontak = BannerKontak::all();

        return view('backend.bannerkontak.index', [
            'page_title' => 'Bannerkontak',
            'tambah' => 'admin.bannerkontak.create',
            'showTambah' => true,
            'bannerkontak' => $bannerkontak,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bannerkontak.create', [
            'page_title' => 'Tambah Bannerkontak',
            'tambah' => 'admin.bannerkontak.create',
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
        $request->validate([
            'text' => 'required|string|max:255', // Validasi untuk text
            'image' => 'required|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ], [
            'text.required' => 'Text banner wajib diisi.',
            'text.string' => 'Text banner harus berupa string.',
            'text.max' => 'Text banner maksimal 255 karakter.',
            'image.required' => 'Image banner wajib diunggah.',
            'image.mimes' => 'Format gambar harus jpg, jpeg, png, webp, atau svg.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Simpan ke storage/app/public/banner
            Storage::disk('public')->putFileAs('bannerkontak', $file, $fileName);

            // Simpan path dan text ke database
            BannerKontak::create([
                'text' => $request->text, // Simpan text
                'image' => 'bannerkontak/' . $fileName, // disimpan tanpa 'storage/' prefix
            ]);
        }

        return redirect()->route('admin.bannerkontak')->with('success', 'Banner berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bannerkontak = BannerKontak::where('id', $id)->firstOrFail();

        return view('backend.bannerkontak.edit', [
            'page_title' => 'Edit Bannerkontak',
            'showTambah' => false, // Tambahkan ini
            'bannerkontak' => $bannerkontak
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
        $bannerkontak = BannerKontak::findOrFail($id);

        // Validasi input
        $request->validate([
            'text' => 'nullable|string|max:255', // Validasi untuk text
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ], [
            'text.string' => 'Text banner harus berupa string.',
            'text.max' => 'Text banner maksimal 255 karakter.',
            'image.mimes' => 'Format gambar harus jpg, jpeg, png, webp, atau svg.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        // Proses jika upload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($bannerkontak->image && Storage::disk('public')->exists($bannerkontak->image)) {
                Storage::disk('public')->delete($bannerkontak->image);
            }

            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('bannerkontak', $file, $fileName);
            $bannerkontak->image = 'bannerkontak/' . $fileName; // Update path gambar
        }

        // Update text jika ada
        if ($request->filled('text')) {
            $bannerkontak->text = $request->text; // Update text
        }

        $bannerkontak->save();

        return redirect()->route('admin.bannerkontak')->with('success', 'Banner berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bannerkontak = BannerKontak::findOrFail($id);

        // Hapus file gambar dari storage jika ada
        if ($bannerkontak->image && Storage::disk('public')->exists($bannerkontak->image)) {
            Storage::disk('public')->delete($bannerkontak->image);
        }

        // Hapus record dari database
        $bannerkontak->delete();

        return redirect()->route('admin.bannerkontak')->with('success', 'Banner berhasil dihapus.');
    }
}
