<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\Testimoni;

class TestimoniController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::orderBy('updated_at', 'desc')->get();
        return view('backend.testimoni.index', [
            'page_title' => 'Testimoni',
            'tambah' => 'admin.testimoni.create',
            'showTambah' => true,
            'testimoni' => $testimoni
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cari portofolio berdasarkan id
        $testimoni = Testimoni::where('id', $id)->firstOrFail();

        return view('backend.testimoni.show', [
            'page_title' => 'Detail Testimoni',
            'showTambah' => false,
            'testimoni' => $testimoni
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimoni.create', [
            'page_title' => 'Tambah Testimoni',
            'showTambah' => false,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_pic' => 'required|string|max:255',
            'okupasi' => 'required|string|max:255',
            'nama_lembaga' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Maksimal 2MB
            'status' => 'required|in:aktif,nonaktif',
            'content' => 'required|string',
        ]);

        // Jika validasi gagal, kembalikan ke form dengan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Menyimpan data testimoni
        $testimoni = new Testimoni();
        $testimoni->nama_pic = $request->nama_pic;
        $testimoni->okupasi = $request->okupasi;
        $testimoni->nama_lembaga = $request->nama_lembaga;
        $testimoni->status = $request->status;
        $testimoni->content = $request->content;

        // Mengelola pengunggahan gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimoni', 'public'); // Simpan di storage/app/public/testimoni
            $testimoni->image = $imagePath;
        }

        // Simpan ke database
        $testimoni->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mencari testimoni berdasarkan ID
        $testimoni = Testimoni::findOrFail($id);

        // Mengembalikan view dengan data testimoni
        return view('backend.testimoni.edit', [
            'page_title' => 'Edit Testimoni',
            'showTambah' => false,
            'testimoni' => $testimoni,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_pic' => 'required|string|max:255',
            'okupasi' => 'required|string|max:255',
            'nama_lembaga' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
            'status' => 'required|in:aktif,nonaktif',
            'content' => 'required|string',
        ]);

        // Jika validasi gagal, kembalikan ke form dengan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mencari testimoni berdasarkan ID
        $testimoni = Testimoni::findOrFail($id);

        // Menghapus gambar lama jika ada dan gambar baru diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($testimoni->image) {
                Storage::disk('public')->delete($testimoni->image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('testimoni', 'public');
            $testimoni->image = $imagePath;
        }

        // Memperbarui data testimoni
        $testimoni->nama_pic = $request->nama_pic;
        $testimoni->okupasi = $request->okupasi;
        $testimoni->nama_lembaga = $request->nama_lembaga;
        $testimoni->status = $request->status;
        $testimoni->content = $request->content;

        // Simpan perubahan ke database
        $testimoni->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan testimoni berdasarkan ID
        $testimoni = Testimoni::findOrFail($id);

        // Hapus gambar jika ada
        if ($testimoni->image) {
            Storage::disk('public')->delete($testimoni->image);
        }

        // Hapus testimoni dari database
        $testimoni->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil dihapus.');
    }
    
}
