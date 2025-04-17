<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset = Asset::orderBy('updated_at', 'desc')->get();

        return view('backend.asset.index', [
            'page_title' => 'Asset (Logo)',
            'tambah' => 'admin.asset.create',
            'showTambah' => true,
            'asset' => $asset,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.asset.create', [
            'page_title' => 'Tambah Asset (Logo)',
            'tambah' => 'admin.asset.create',
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
            'logo_reguler' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_dark'    => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_light'   => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'motto'        => 'required|string|max:255',
        ]);

        // Simpan gambar ke storage/app/public/logo
        $logoReguler = $request->file('logo_reguler');
        $logoDark    = $request->file('logo_dark');
        $logoLight   = $request->file('logo_light');

        // Nama acak pakai Str::random
        $logoRegulerName = Str::random(30) . '.' . $logoReguler->getClientOriginalExtension();
        $logoDarkName    = Str::random(30) . '.' . $logoDark->getClientOriginalExtension();
        $logoLightName   = Str::random(30) . '.' . $logoLight->getClientOriginalExtension();

        // Simpan ke folder 'public/logo' (artinya: storage/app/public/logo)
        $logoReguler->storeAs('logo', $logoRegulerName, 'public');
        $logoDark->storeAs('logo', $logoDarkName, 'public');
        $logoLight->storeAs('logo', $logoLightName, 'public');

        // Simpan ke database
        Asset::create([
            'logo_reguler' => 'logo/' . $logoRegulerName,
            'logo_dark'    => 'logo/' . $logoDarkName,
            'logo_light'   => 'logo/' . $logoLightName,
            'motto'        => $request->motto,
        ]);

        return redirect()->route('admin.asset')->with('success', 'Asset berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ambil asset yang akan diedit
        $asset = Asset::findOrFail($id);    
        return view('backend.asset.edit', [
            'page_title' => 'Ubah Asset (Logo)',
            'tambah' => 'admin.asset.edit',
            'showTambah' => false,
            'asset' => $asset,
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
            'motto' => 'required|string|max:255',
            'logo_reguler' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_dark'    => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo_light'   => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $asset = Asset::findOrFail($id);

        $data = [
            'motto' => $request->motto,
        ];

        if ($request->hasFile('logo_reguler')) {
            $logoReguler = $request->file('logo_reguler');
            $logoRegulerName = Str::random(30) . '.' . $logoReguler->getClientOriginalExtension();
            $logoReguler->storeAs('logo', $logoRegulerName, 'public');
            $data['logo_reguler'] = 'logo/' . $logoRegulerName;
        }

        if ($request->hasFile('logo_dark')) {
            $logoDark = $request->file('logo_dark');
            $logoDarkName = Str::random(30) . '.' . $logoDark->getClientOriginalExtension();
            $logoDark->storeAs('logo', $logoDarkName, 'public');
            $data['logo_dark'] = 'logo/' . $logoDarkName;
        }

        if ($request->hasFile('logo_light')) {
            $logoLight = $request->file('logo_light');
            $logoLightName = Str::random(30) . '.' . $logoLight->getClientOriginalExtension();
            $logoLight->storeAs('logo', $logoLightName, 'public');
            $data['logo_light'] = 'logo/' . $logoLightName;
        }

        // Update datanya
        $asset->update($data);

        return redirect()->route('admin.asset')->with('success', 'Asset berhasil diperbarui.');
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::where('id', $id)->firstOrFail();

        if ($asset->logo_reguler) {
            Storage::disk('public')->delete($asset->logo_reguler);
        }
        if ($asset->logo_reguler) {
            Storage::disk('public')->delete($asset->logo_reguler);
        }
        if ($asset->logo_reguler) {
            Storage::disk('public')->delete($asset->logo_reguler);
        }
        
        // Hapus data asset dari database
        $asset->delete();

        return redirect()->route('admin.asset')->with('success', 'Asset berhasil dihapus.');
    }
}
