<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\NamaPelatihan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolio = Portofolio::orderBy('updated_at', 'desc')->get();
        return view('backend.portofolio.index', [
            'page_title' => 'Portofolio',
            'tambah' => 'admin.portofolio.create',
            'showTambah' => true,
            'portofolio' => $portofolio
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelatihan = NamaPelatihan::orderBy('nama_pelatihan', 'asc')->get();

        // Format data di controller, supaya Blade tetap bersih
        $pelatihanOptions = $pelatihan->map(function ($item) {
            return [
                'value' => $item->nama_kategori . '|' . $item->nama_pelatihan,
                'label' => $item->nama_kategori . ' - ' . $item->nama_pelatihan
            ];
        });

        return view('backend.portofolio.create', [
            'page_title' => 'Tambah Portofolio',
            'showTambah' => false,
            'pelatihanOptions' => $pelatihanOptions
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_portofolio' => 'required|string|max:255',
            // Validasi lainnya
        ]);

        // Pisahkan kategori & nama pelatihan dari select
        list($kategori_tema, $nama_pelatihan) = explode('|', $request->kategori_nama_pelatihan);

        // Buat slug unik
        $slug = $this->createUniqueSlug($request->judul_portofolio);

        // Simpan thumbnail dan cover jika diunggah
        $thumbnailPath = $request->file('thumbnail') ? $request->file('thumbnail')->store('portofolio/thumbnails', 'public') : null;
        $coverPath = $request->file('cover') ? $request->file('cover')->store('portofolio/covers', 'public') : null;

        // Simpan data ke database
        Portofolio::create([
            'judul_portofolio' => $request->judul_portofolio,
            'nama_klien' => $request->nama_klien,
            'kategori_tema' => $kategori_tema,
            'nama_pelatihan' => $nama_pelatihan,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir,
            'nama_tempat' => $request->nama_tempat,
            'kota_kabupaten' => $request->kota_kabupaten,
            'provinsi' => $request->provinsi,
            'thumbnail' => $thumbnailPath,
            'cover' => $coverPath,
            'content' => $request->content,
            'link_klien' => $request->link_klien,
            'status' => $request->status,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.portofolio')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    private function createUniqueSlug($title)
    {
        // Buat slug dasar dari judul
        $slug = Str::slug($title);

        // Cek apakah slug sudah ada di database
        $count = Portofolio::where('slug', 'LIKE', "{$slug}%")->count();

        // Jika sudah ada, tambahkan angka di akhir slug
        return $count ? "{$slug}-{$count}" : $slug;
    }


    /**
     * Display the specified resource.
     */
    public function show($judul_portofolio)
    {
        // Cari portofolio berdasarkan judul_portofolio
        $portofolio = Portofolio::where('judul_portofolio', $judul_portofolio)->firstOrFail();

        return view('backend.portofolio.show', [
            'page_title' => 'Detail Portofolio',
            'showTambah' => false,
            'portofolio' => $portofolio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelatihan = NamaPelatihan::orderBy('nama_pelatihan', 'asc')->get();

        // Format data di controller supaya Blade tetap bersih
        $pelatihanOptions = $pelatihan->map(function ($item) {
            return [
                'value' => $item->nama_kategori . '|' . $item->nama_pelatihan,
                'label' => $item->nama_kategori . ' - ' . $item->nama_pelatihan
            ];
        });

        $portofolio = Portofolio::findOrFail($id);

        return view('backend.portofolio.edit', [
            'page_title' => 'Edit Portofolio',
            'showTambah' => false,
            'portofolio' => $portofolio,
            'pelatihanOptions' => $pelatihanOptions
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'judul_portofolio' => 'required|string|max:255',
            'nama_klien' => 'required|string|max:255',
            'kategori_tema_nama_pelatihan' => 'required|string', // Ubah nama sesuai dengan input di Blade
            'waktu_awal' => 'required|date',
            'waktu_akhir' => 'required|date|after_or_equal:waktu_awal',
            'nama_tempat' => 'required|string|max:255',
            'kota_kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'content' => 'required',
            'link_klien' => 'nullable|url',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        // Pisahkan nilai kategori tema dan nama pelatihan
        $kategori_tema_nama_pelatihan = explode('|', $request->kategori_tema_nama_pelatihan);

        if (count($kategori_tema_nama_pelatihan) < 2) {
            return back()->withErrors(['kategori_tema_nama_pelatihan' => 'Kategori Tema dan Nama Pelatihan tidak valid!']);
        }

        $kategori_tema = $kategori_tema_nama_pelatihan[0];
        $nama_pelatihan = $kategori_tema_nama_pelatihan[1];

        $data = $request->except(['thumbnail', 'cover', 'kategori_tema_nama_pelatihan']);
        $data['kategori_tema'] = $kategori_tema;
        $data['nama_pelatihan'] = $nama_pelatihan;

        // Update thumbnail jika ada file baru
        if ($request->hasFile('thumbnail')) {
            if ($portofolio->thumbnail && Storage::disk('public')->exists($portofolio->thumbnail)) {
                Storage::disk('public')->delete($portofolio->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('portofolio/thumbnails', 'public');
        }

        // Update cover jika ada file baru
        if ($request->hasFile('cover')) {
            if ($portofolio->cover && Storage::disk('public')->exists($portofolio->cover)) {
                Storage::disk('public')->delete($portofolio->cover);
            }
            $data['cover'] = $request->file('cover')->store('portofolio/covers', 'public');
        }

        $portofolio->update($data);

        return redirect()->route('admin.portofolio')->with('success', 'Portofolio berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $portofolio = Portofolio::findOrFail($id);

        // Hapus file thumbnail jika ada
        if ($portofolio->thumbnail) {
            Storage::disk('public')->delete($portofolio->thumbnail);
        }

        // Hapus file cover jika ada
        if ($portofolio->cover) {
            Storage::disk('public')->delete($portofolio->cover);
        }

        // Hapus data dari database
        $portofolio->delete();

        return redirect()->route('admin.portofolio')->with('success', 'Portofolio berhasil dihapus!');
    }
}
