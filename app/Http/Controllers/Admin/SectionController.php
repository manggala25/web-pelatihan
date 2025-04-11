<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;


use App\Models\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Section::orderBy('order', 'asc')->get();
        return view('backend.section.index', [
            'page_title' => 'Section Homepage',
            'tambah' => 'admin.section.create',
            'showTambah' => true,
            'section' => $section
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Section::find($id);
        return view('backend.section.show', [
            'page_title' => 'Detail Section Homepage',
            'showTambah' => false,
            'section' => $section
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section = Section::orderBy('order')->get(); // Mengambil semua section berdasarkan urutan
        return view('backend.section.create', [
            'page_title' => 'Tambah Section Homepage',
            'showTambah' => false,
            'section' => $section
        ]);
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'layout_type' => 'required',
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_url' => 'nullable|url',
            'video_url' => 'nullable|url',
        ]);

        // Validasi hanya satu jenis media yang boleh diisi
        $mediaInputs = array_filter([
            'image' => $request->hasFile('image'),
            'image_url' => $request->filled('image_url'),
            'video_url' => $request->filled('video_url'),
        ]);

        if (count($mediaInputs) > 1) {
            return back()->withErrors(['media' => 'Pilih hanya salah satu: upload gambar, URL gambar, atau URL video.'])->withInput();
        }

        // Urutan section
        if ($request->order === 'first') {
            Section::increment('order');
            $order = 0;
        } elseif ($request->order === 'last') {
            $order = Section::max('order') + 1;
        } else {
            $selectedSection = Section::find($request->order);
            if ($selectedSection) {
                $order = $selectedSection->order + 1;
                Section::where('order', '>=', $order)->increment('order');
            } else {
                $order = Section::max('order') + 1;
            }
        }

        $section = new Section();
        $section->layout_type = $request->layout_type;
        $section->title = $request->title;
        $section->heading = $request->heading;
        $section->content = $request->content;
        $section->order = $order;

        // Prioritaskan upload file jika ada, lalu image_url, lalu video
        if ($request->hasFile('image')) {
            $section->image = $request->file('image')->store('image-section', 'public');
            $section->video_url = null;
        } elseif ($request->filled('image_url')) {
            $section->image = $request->image_url;
            $section->video_url = null;
        } elseif ($request->filled('video_url')) {
            $section->image = null;
            $section->video_url = $request->video_url;
        }

        $section->save();

        return redirect()->route('admin.section')->with('success', 'Section berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allSections = Section::orderBy('order')->get(); // List semua section
        $section = Section::findOrFail($id); // Yang sedang di-edit

        return view('backend.section.edit', [
            'page_title' => 'Edit Section Homepage',
            'showTambah' => false,
            'section' => $section,
            'allSections' => $allSections // kirim variabel baru ke Blade
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
        $request->validate([
            'layout_type' => 'required',
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_url' => 'nullable|url',
            'video_url' => 'nullable|url',
        ]);

        $mediaInputs = array_filter([
            'image' => $request->hasFile('image'),
            'image_url' => $request->filled('image_url'),
            'video_url' => $request->filled('video_url'),
        ]);

        if (count($mediaInputs) > 1) {
            return back()->withErrors(['media' => 'Pilih hanya salah satu: upload gambar, URL gambar, atau URL video.'])->withInput();
        }

        $section = Section::findOrFail($id);

        // Update urutan jika berubah
        if ($request->order === 'first') {
            Section::where('id', '!=', $section->id)->increment('order');
            $order = 0;
        } elseif ($request->order === 'last') {
            $order = Section::max('order') + 1;
        } elseif ($request->order != $section->id) {
            $selectedSection = Section::find($request->order);
            if ($selectedSection) {
                $order = $selectedSection->order + 1;
                Section::where('id', '!=', $section->id)->where('order', '>=', $order)->increment('order');
            } else {
                $order = Section::max('order') + 1;
            }
        } else {
            $order = $section->order;
        }

        $section->layout_type = $request->layout_type;
        $section->title = $request->title;
        $section->heading = $request->heading;
        $section->content = $request->content;
        $section->order = $order;

        // Update media
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada dan berupa path upload (bukan URL)
            if ($section->image && !filter_var($section->image, FILTER_VALIDATE_URL)) {
                Storage::disk('public')->delete($section->image);
            }

            $section->image = $request->file('image')->store('image-section', 'public');
            $section->video_url = null;
        } elseif ($request->filled('image_url')) {
            $section->image = $request->image_url;
            $section->video_url = null;
        } elseif ($request->filled('video_url')) {
            // Hapus gambar lama jika bukan URL (upload)
            if ($section->image && !filter_var($section->image, FILTER_VALIDATE_URL)) {
                Storage::disk('public')->delete($section->image);
            }

            $section->image = null;
            $section->video_url = $request->video_url;
        }

        $section->save();

        return redirect()->route('admin.section')->with('success', 'Section berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::findOrFail($id);

        // Simpan urutan section sebelum dihapus
        $deletedOrder = $section->order;

        // Hapus file image jika file lokal
        if ($section->image && !filter_var($section->image, FILTER_VALIDATE_URL)) {
            Storage::disk('public')->delete($section->image);
        }

        $section->delete();

        // Update urutan untuk section lain agar tetap berurutan
        Section::where('order', '>', $deletedOrder)->decrement('order');

        return redirect()->route('admin.section')->with('success', 'Section berhasil dihapus.');
    }
}
