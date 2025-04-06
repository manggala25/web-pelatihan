<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\BentukPelatihan;

class BentukPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bentukpelatihan = BentukPelatihan::orderBy('updated_at', 'desc')->get();
        return view('backend.bentuk-pelatihan.index', [
            'page_title' => 'Bentuk Pelatihan',
            'tambah' => 'admin.bentuk-pelatihan.create',
            'showTambah' => true,
            'bentukpelatihan' => $bentukpelatihan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bentuk-pelatihan.create', [
            'page_title' => 'Tambah Bentuk Pelatihan',
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
            'nama_bentuk_pelatihan' => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Validasi gambar
        ]);

        // Inisialisasi model BentukPelatihan
        $bentukPelatihan = new BentukPelatihan();
        $bentukPelatihan->nama_bentuk_pelatihan = $request->nama_bentuk_pelatihan;
        $bentukPelatihan->status = $request->status;

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Buat nama file unik
            Storage::disk('public')->putFileAs('bentuk-pelatihan', $image, $imageName); // Simpan file ke storage
            $bentukPelatihan->image = 'bentuk-pelatihan/' . $imageName; // Simpan path gambar
        }

        // Simpan data ke database
        $bentukPelatihan->save();

        // Redirect atau kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.bentuk-pelatihan')->with('success', 'Bentuk Pelatihan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Cari BentukPelatihan berdasarkan id
        $bentukpelatihan = BentukPelatihan::where('id', $id)->firstOrFail();

        return view('backend.bentuk-pelatihan.show', [
            'page_title' => 'Detail Bentuk Pelatihan',
            'showTambah' => false,
            'bentukpelatihan' => $bentukpelatihan
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
        $bentukpelatihan = BentukPelatihan::where('id', $id)->firstOrFail();
        return view('backend.bentuk-pelatihan.edit', [
            'page_title' => 'Edit Bentuk Pelatihan',
            'showTambah' => false,
            'bentukpelatihan' => $bentukpelatihan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BentukPelatihan  $bentukPelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'nama_bentuk_pelatihan' => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Validate image
        ]);

        // Find the existing BentukPelatihan record
        $bentukPelatihan = BentukPelatihan::find($id);

        if (!$bentukPelatihan) {
            return redirect()->route('admin.bentuk-pelatihan')->with('error', 'Data tidak ditemukan.');
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($bentukPelatihan->image && Storage::disk('public')->exists($bentukPelatihan->image)) {
                Storage::disk('public')->delete($bentukPelatihan->image);
            }

            // Store the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('bentuk-pelatihan', $imageName, 'public');

            // Update the image attribute with the new image path
            $bentukPelatihan->image = 'bentuk-pelatihan/' . $imageName;
        }

        // Update the other attributes
        $bentukPelatihan->nama_bentuk_pelatihan = $request->nama_bentuk_pelatihan;
        $bentukPelatihan->status = $request->status;

        // Save the changes to the database
        $bentukPelatihan->save();

        // Redirect back with success message
        return redirect()->route('admin.bentuk-pelatihan')->with('success', 'Bentuk Pelatihan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BentukPelatihan  $bentukPelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bentukPelatihan = BentukPelatihan::find($id);

        if (!$bentukPelatihan) {
            return redirect()->route('admin.bentuk-pelatihan')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus gambar jika ada
        if ($bentukPelatihan->image) {
            Storage::disk('public')->delete($bentukPelatihan->image); // Hapus file gambar dari storage
        }

        // Hapus data dari database
        $bentukPelatihan->delete();

        // Redirect atau kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.bentuk-pelatihan')->with('success', 'Bentuk Pelatihan berhasil dihapus.');
    }
}
