<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\TargetPelatihan;

class TargetPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $targetpelatihan = TargetPelatihan::orderBy('updated_at', 'desc')->get();
        return view('backend.target-pelatihan.index', [
            'page_title' => 'Target Pelatihan',
            // 'tambah' => 'admin.targetpelatihan.create',
            'showTambah' => false,
            'targetpelatihan' => $targetpelatihan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.target-pelatihan.create', [
            'page_title' => 'Tambah Target Pelatihan',
            'showTambah' => false,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $targetpelatihan = TargetPelatihan::where('id', $id)->firstOrFail();

        return view('backend.target-pelatihan.show', [
            'page_title' => 'Detail Target Pelatihan',
            'showTambah' => false,
            'targetpelatihan' => $targetpelatihan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $targetpelatihan = TargetPelatihan::where('id', $id)->firstOrFail();
        return view('backend.target-pelatihan.edit', [
            'page_title' => 'Edit Target Pelatihan',
            'showTambah' => false,
            'targetpelatihan' => $targetpelatihan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'image_front' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_back' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cari targetpelatihan berdasarkan ID
        $targetpelatihan = TargetPelatihan::findOrFail($id);

        // Jika ada file gambar yang diupload
        if ($request->hasFile('image_front')) {
            // Hapus gambar lama jika ada
            if ($targetpelatihan->image_front && Storage::disk('public')->exists($targetpelatihan->image_front)) {
                Storage::disk('public')->delete($targetpelatihan->image_front);
            }

            // Simpan gambar baru ke folder "targetpelatihan" di disk "public"
            $filePath = $request->file('image_front')->store('targetpelatihan', 'public');

            // Update path gambar di database
            $targetpelatihan->image_front = $filePath;
        }
        // Jika ada file gambar yang diupload
        if ($request->hasFile('image_back')) {
            // Hapus gambar lama jika ada
            if ($targetpelatihan->image_back && Storage::disk('public')->exists($targetpelatihan->image_back)) {
                Storage::disk('public')->delete($targetpelatihan->image_back);
            }

            // Simpan gambar baru ke folder "targetpelatihan" di disk "public"
            $filePath = $request->file('image_back')->store('targetpelatihan', 'public');

            // Update path gambar di database
            $targetpelatihan->image_back = $filePath;
        }

        // Update data lainnya
        $targetpelatihan->top_title = $request->top_title;
        $targetpelatihan->heading = $request->heading;
        $targetpelatihan->content = $request->content;

        // Simpan perubahan ke database
        $targetpelatihan->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.target-pelatihan')->with('success', 'Target Pelatihan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $targetpelatihan = TargetPelatihan::where('id', $id)->firstOrFail();
        $targetpelatihan->delete();
        return redirect()->route('admin.target-pelatihan.index')->with('success', 'Target Pelatihan berhasil dihapus');
    }
}
