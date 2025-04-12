<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class BannerController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();

        return view('backend.banner.index', [
            'page_title' => 'Banner',
            'tambah' => 'admin.banner.create',
            'showTambah' => true,
            'banners' => $banners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create', [
            'page_title' => 'Tambah Banner',
            'tambah' => 'admin.banner.create',
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
            'gambar' => 'required|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ], [
            'gambar.required' => 'Gambar banner wajib diunggah.',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, png, webp, atau svg.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Simpan ke storage/app/public/banner
            Storage::disk('public')->putFileAs('banner', $file, $fileName);

            // Simpan path ke database
            Banner::create([
                'gambar' => 'banner/' . $fileName, // disimpan tanpa 'storage/' prefix
            ]);
        }

        return redirect()->route('admin.banner')->with('success', 'Banner berhasil ditambahkan.');
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
        $banners = Banner::where('id', $id)->firstOrFail();

        return view('backend.banner.edit', [
            'page_title' => 'Edit banners',
            'showTambah' => false, // Tambahkan ini
            'banners' => $banners
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
        $banner = Banner::findOrFail($id);

        // Validasi input
        $request->validate([
            'gambar' => 'nullable|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ], [
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, png, webp, atau svg.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        // Proses jika upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($banner->gambar && Storage::disk('public')->exists($banner->gambar)) {
                Storage::disk('public')->delete($banner->gambar);
            }

            $file = $request->file('gambar');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('banner', $file, $fileName);
            $banner->gambar = 'banner/' . $fileName;
        }

        $banner->save();

        return redirect()->route('admin.banner')->with('success', 'Banner berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Hapus file gambar dari storage jika ada
        if ($banner->gambar && Storage::disk('public')->exists($banner->gambar)) {
            Storage::disk('public')->delete($banner->gambar);
        }

        // Hapus record dari database
        $banner->delete();

        return redirect()->route('admin.banner')->with('success', 'Banner berhasil dihapus.');
    }
}
