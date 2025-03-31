<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriTema;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriTemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoritema = KategoriTema::orderBy('updated_at', 'desc')->get();
        return view('backend.kategori-tema.index', [
            'page_title' => 'Kategori Tema',
            'tambah' => 'admin.kategori-tema.create',
            'showTambah' => true,
            'kategoritema' => $kategoritema
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kategori-tema.create', [
            'page_title' => 'Tambah Kategori Tema',
            'showTambah' => false,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategoritema = KategoriTema::findOrFail($id);
        return view('backend.kategori-tema.edit', [
            'page_title' => 'Edit Kategori Tema',
            'showTambah' => false,
            'kategoritema' => $kategoritema
        ]);
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori_tema,nama_kategori',
            'deskripsi' => 'nullable|string',
            'status' => 'nullable|in:aktif,nonaktif',
        ]);

        try {
            $slug = $this->generateUniqueSlug($request->nama_kategori);

            KategoriTema::create([
                'nama_kategori' => $request->nama_kategori,
                'slug' => $slug,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status ?? 'aktif',
            ]);

            return redirect()->route('admin.kategori-tema')->with('success', 'Kategori berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    private function generateUniqueSlug($nama_kategori)
    {
        $slug = Str::slug($nama_kategori);
        $count = KategoriTema::where('slug', 'LIKE', "$slug%")->count();

        return $count ? "{$slug}-" . ($count + 1) : $slug;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori_tema,nama_kategori,' . $id,
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $kategori = KategoriTema::findOrFail($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.kategori-tema')->with('success', 'Kategori berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        KategoriTema::destroy($id);
        return response()->json(['success' => 'Kategori berhasil dihapus!']);
    }
}
