<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisi;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = VisiMisi::orderBy('updated_at', 'desc')->get();

        return view('backend.visimisi.index', [
            'page_title' => 'Visi & Misi',
            'showTambah' => false,
            'visimisi' => $visimisi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $visimisi = VisiMisi::findOrFail($id);

        return view('backend.visimisi.show', [
            'page_title' => 'Detail Visi & Misi',
            'showTambah' => false,
            'visimisi' => $visimisi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visimisi = VisiMisi::findOrFail($id);

        return view('backend.visimisi.edit', [
            'page_title' => 'Edit Visi & Misi',
            'showTambah' => false,
            'visimisi' => $visimisi,
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
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visimisi = VisiMisi::findOrFail($id);
        $visimisi->update($request->all());

        return redirect()->route('admin.visimisi')->with('success', 'Visi & Misi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    }
}
